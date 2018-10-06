<?php

namespace frontend\widgets;

use domain\entities\Shop\Category;
use yii\base\Widget;

class SubCategories extends Widget
{
    /* @var $category Category */
    public $category;

    public function run()
    {
        $result = $this->getTemplate();

        return $result;
    }

    private function getTemplate()
    {
        $tplSubCategories = '';
        $categories = $this->category->children;
        if (empty($categories)) {
            $categories = $this->category->parent->children;
        }

        foreach ($categories as $category) {
            if ($this->category->id == $category->id) {

                $tplSubCategories .= $this->render('sub-category/_currentSubCategory', [
                    'category' => $category,
                ]);
            } else {

                $tplSubCategories .= $this->render('sub-category/_subCategory', [
                    'category' => $category,
                ]);
            }
        }

        $subcategoriesGrid = $this->render('sub-category/view', [
            'tplSubCategories' => $tplSubCategories,
        ]);

        return $subcategoriesGrid;
    }
}
