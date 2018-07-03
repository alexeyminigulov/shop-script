<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Category;
use domain\exceptions\EntityNotFoundException;

class CategoryRepository
{
    public function find($id): Category
    {
        $category = Category::findOne(['id', $id]);

        if (!$category) {
            throw new EntityNotFoundException('Category not found.');
        }
        return $category;
    }

    public function getPrev(Category $category): ?Category
    {
        /* @var $prevCategory Category|null */
        $prevCategory = $category->getPrev()->one();

        return $prevCategory;
    }

    public function getNext(Category $category): ?Category
    {
        /* @var $nextCategory Category|null */
        $nextCategory = $category->getNext()->one();

        return $nextCategory;
    }

    public function save(Category $category, $runValidation = true)
    {
        if (!$category->save($runValidation)) {
            throw new \RuntimeException('User did not save.');
        }
    }

    public function delete(Category $category)
    {
        if ($category->delete() === false) {
            throw new \RuntimeException('Category has not been deleted.');
        }
    }
}