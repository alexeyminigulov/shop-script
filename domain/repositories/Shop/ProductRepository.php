<?php

namespace domain\repositories\Shop;

use domain\dispatcher\EventDispatcherInterface;
use domain\entities\Shop\Product\events\ProductPersistence;
use domain\entities\Shop\Product\events\ProductRemove;
use domain\entities\Shop\Product\Product;
use domain\exceptions\EntityNotFoundException;

class ProductRepository
{
    private $categoryRepository;
    private $dispatcher;

    public function __construct(CategoryRepository $categoryRepository, EventDispatcherInterface $dispatcher)
    {
        $this->categoryRepository = $categoryRepository;
        $this->dispatcher = $dispatcher;
    }

    public function find($id): Product
    {
        $product = Product::findOne(['id', $id]);

        if (!$product) {
            throw new EntityNotFoundException('Product is not found.');
        }
        return $product;
    }

    public function getBy($field, $value): Product
    {
        $product = Product::findOne([$field => $value]);

        if (!$product) {
            throw new EntityNotFoundException('Product is not found.');
        }
        return $product;
    }

    /**
     * @param bool $onlyActive
     * @return Product[]
     */
    public function getAll($onlyActive = false): array
    {
        $products = $onlyActive ? Product::findAll(['status', Product::STATUS_ACTIVE]) : Product::find()->all();

        if (empty($products)) {
            throw new EntityNotFoundException('Products is not found.');
        }
        return $products;
    }

    public function getGroups($categoryId)
    {
        $categories = $this->categoryRepository->getWithParents($categoryId);

        $groups = [];
        foreach ($categories as $category) {
            $groups = array_merge($groups, $category->groups);
        }
        if (empty($groups)) {
            throw new EntityNotFoundException('Groups is not found.');
        }
        return $groups;
    }

    public function getMaxValueSortPicture(Product $product): int
    {
        return $product->getPictures()->max('sort');
    }

    public function save(Product $product, $runValidation = true)
    {
        if (!$product->save($runValidation)) {
            throw new \RuntimeException('Product did not save.');
        }
        $this->dispatcher->dispatch(new ProductPersistence($product));
    }

    public function delete(Product $product)
    {
        if ($product->delete() === false) {
            throw new \RuntimeException('Product has not been delete.');
        }
        $this->dispatcher->dispatch(new ProductRemove($product));
    }
}