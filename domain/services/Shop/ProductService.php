<?php

namespace domain\services\Shop;

use domain\entities\Shop\Product\Product;
use domain\entities\Shop\Product\Value;
use domain\forms\Shop\Product\ProductCreateForm;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;
use domain\services\TransactionManager;

class ProductService
{
    private $repository;
    private $categoryRepository;
    private $transaction;

    public function __construct(ProductRepository $repository,
                                CategoryRepository $categoryRepository,
                                TransactionManager $transaction
    )
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
        $this->transaction = $transaction;
    }

    public function create(ProductCreateForm $form)
    {
        $product = Product::create($form->name, $form->slug, $form->price, $form->categoryId);

        $this->transaction->wrap(function () use ($product, $form) {

            $this->repository->save($product);

            foreach ($form->groups as $group) {
                foreach ($group->attributes as $value) {

                    $value = Value::create($product->id, $value->id, $value->value);
                    $product->assignmentValue($value);
                }
            }
            $this->repository->save($product);
        });

        return $product;
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