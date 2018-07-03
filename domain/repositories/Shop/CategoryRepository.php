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

    public function save(Category $category, $runValidation = true)
    {
        if (!$category->save($runValidation)) {
            throw new \RuntimeException('User did not save.');
        }
    }
}