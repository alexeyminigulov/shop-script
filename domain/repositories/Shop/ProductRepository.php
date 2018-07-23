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

    public function getProducts(array $categoryIds)
    {
        $products = Product::find()->where(['id' => $categoryIds])->all();

        if (empty($products)) {
            throw new EntityNotFoundException('Products is not found.');
        }
        return $products;
    }

    public function save(Product $product, $runValidation = true)
    {
        if (!$product->save($runValidation)) {
            throw new \RuntimeException('Product did not save.');
        }
    }
}