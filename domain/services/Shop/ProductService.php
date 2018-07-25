<?php

namespace domain\services\Shop;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Product;
use domain\entities\Shop\Product\Value;
use domain\forms\Shop\Product\ProductCreateForm;
use domain\forms\Shop\Product\ProductEditForm;
use domain\forms\Shop\Product\ValueForm;
use domain\repositories\Shop\ProductRepository;
use domain\repositories\Shop\ValueRepository;
use domain\services\TransactionManager;

class ProductService
{
    private $repository;
    private $valueRepository;
    private $transaction;

    public function __construct(ProductRepository $repository,
                                ValueRepository $valueRepository,
                                TransactionManager $transaction
    )
    {
        $this->repository = $repository;
        $this->valueRepository = $valueRepository;
        $this->transaction = $transaction;
    }

    public function create(ProductCreateForm $form)
    {
        $product = Product::create($form->name, $form->slug, $form->price, $form->categoryId, $form->brandId, $form->description);

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
            $this->repository->save($product);
        });

        return $product;
    }

    public function update(ProductEditForm $form)
    {
        $product = $this->repository->find($form->id);
        $product->edit($form->name, $form->slug, $form->price, $form->brandId, $form->description);

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
            $this->repository->save($product);
        });

        return $product;
    }
}