<?php

namespace domain\services;

use domain\entities\Shop\Category;
use domain\forms\Shop\CategoryForm;

class CategoryService
{
    public function create(CategoryForm $form)
    {
        $category = Category::create($form->name, $form->slug);

        $parent = Category::findOne(['id', $form->parentId]);
        $category->appendTo($parent);
        $category->save();

        return $category;
    }
}