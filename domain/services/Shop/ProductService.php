<?php

namespace domain\services\Shop;

use domain\entities\Shop\Product\Product;
use domain\forms\Shop\Product\ProductCreateForm;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;

class ProductService
{
    private $repository;
    private $categoryRepository;

    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function create(ProductCreateForm $form)
    {
        return new Product();
    }

    public function getGroups($categoryId)
    {
        $categories = $this->categoryRepository->getWithParents($categoryId);

        $groups = [];
        foreach ($categories as $category) {
            $groups = array_merge($groups, $category->groups);
        }

        return $groups;
    }
}