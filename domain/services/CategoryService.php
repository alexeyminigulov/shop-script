<?php

namespace domain\services;

use domain\entities\Shop\Category;
use domain\forms\Shop\CategoryForm;
use domain\repositories\Shop\CategoryRepository;
use domain\exceptions\EntityNotFoundException;

class CategoryService
{
    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(CategoryForm $form)
    {
        try {
            $parent = $this->repository->find($form->parentId);
        } catch (EntityNotFoundException $e) {
            throw new EntityNotFoundException('Parent category not exists.');
        }

        $category = Category::create($form->name, $form->slug, $parent);

        $this->repository->save($category);

        return $category;
    }
}