<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Product\Product;
use domain\exceptions\EntityNotFoundException;

class ProductRepository
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function find($id): Product
    {
        $product = Product::findOne(['id', $id]);

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
    }
}