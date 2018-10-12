<?php

namespace domain\entities\Shop\Category\events;

use domain\entities\Shop\Category\Category;

class CategoryPersistence
{
    public $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
}