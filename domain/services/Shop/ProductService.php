<?php

namespace domain\services\Shop;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Picture;
use domain\entities\Shop\Product\Product;
use domain\entities\Shop\Product\Value;
use domain\forms\Shop\Product\ProductCreateForm;
use domain\forms\Shop\Product\ProductEditForm;
use domain\forms\Shop\Product\ValueForm;
use domain\repositories\Shop\PictureRepository;
use domain\repositories\Shop\ProductRepository;
use domain\repositories\Shop\ValueRepository;
use domain\services\TransactionManager;

class ProductService
{
    private $repository;
    private $valueRepository;
    private $pictureRepository;
    private $transaction;

    public function __construct(ProductRepository $repository,
                                ValueRepository $valueRepository,
                                PictureRepository $pictureRepository,
                                TransactionManager $transaction
    )
    {
        $this->repository = $repository;
        $this->valueRepository = $valueRepository;
        $this->pictureRepository = $pictureRepository;
        $this->transaction = $transaction;
    }

    public function create(ProductCreateForm $form)
    {
        $product = Product::create(
            $form->code, $form->name, $form->slug, $form->price,
            $form->categoryId, $form->brandId, $form->description,
            $form->status
        );

        $this->transaction->wrap(function () use ($product, $form) {

            $this->repository->save($product);

            foreach ($form->groups as $group) {
                /** @var ValueForm $valueForm */
                foreach ($group->attributes as $valueForm) {

                    if ($valueForm->type != Attribute::TYPE_CHECKBOX) {
                        $value = Value::create($product->id, $valueForm->id, $valueForm->value);
                        $product->assignmentValue($value);
                        continue;
                    }
                    foreach ($valueForm->value as $value) {
                        $value = Value::create($product->id, $valueForm->id, $value);
                        $product->assignmentValue($value);
                    }
                }
            }

            foreach ($form->pictures as $key => $file) {
                $picture = Picture::create($product->id, $key, $file);
                $product->assignPicture($picture);
            }
            $this->repository->save($product);
        });

        return $product;
    }

    public function update(ProductEditForm $form)
    {
        $product = $this->repository->find($form->id);
        $product->edit(
            $form->code, $form->name, $form->slug,
            $form->price, $form->brandId,
            $form->description, $form->status
        );

        $this->transaction->wrap(function () use ($product, $form) {

            $product->eraseValues();
            $this->repository->save($product);

            foreach ($form->groups as $group) {
                /** @var ValueForm $valueForm */
                foreach ($group->attributes as $valueForm) {

                    if ($valueForm->type != Attribute::TYPE_CHECKBOX) {
                        $value = Value::create($product->id, $valueForm->id, $valueForm->value);
                        $product->assignmentValue($value);
                        continue;
                    }
                    foreach ($valueForm->value as $value) {
                        $value = Value::create($product->id, $valueForm->id, $value);
                        $product->assignmentValue($value);
                    }
                }
            }

            foreach ($form->pictures as $key => $file) {
                $picture = Picture::create($product->id, $key, $file);
                $product->assignPicture($picture);
            }
            $this->repository->save($product);
        });

        return $product;
    }

    public function deletePicture($productId, $pictureId)
    {
        $picture = $this->pictureRepository->find($pictureId);
        if ($picture->product_id != $productId) {
            throw new \DomainException('Don\'t match product id');
        }
        $this->pictureRepository->delete($picture);
    }

    public function movePictureUp($productId, $pictureId): Product
    {
        $funcMoveDown = function (Product $product, Picture $picture) {
            $product->movePictureUp($picture);
        };

        return call_user_func_array([$this, 'movePicture'], [$productId, $pictureId, $funcMoveDown]);
    }

    public function movePictureDown($productId, $pictureId): Product
    {
        $funcMoveDown = function (Product $product, Picture $picture) {
            $product->movePictureDown($picture);
        };

        return call_user_func_array([$this, 'movePicture'], [$productId, $pictureId, $funcMoveDown]);
    }

    private function movePicture($productId, $pictureId, callable $func): Product
    {
        $picture = $this->pictureRepository->find($pictureId);
        if ($picture->product_id != $productId) {
            throw new \DomainException('Don\'t match product id');
        }
        $product = $this->repository->find($productId);

        call_user_func($func, $product, $picture);

        $this->repository->save($product);

        return $product;
    }
}