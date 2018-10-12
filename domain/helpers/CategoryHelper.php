<?php

namespace domain\helpers;

use domain\entities\Shop\Category\Category;
use yii\helpers\ArrayHelper;

class CategoryHelper
{
    public static function list(bool $showRoot = true): array
    {
        $categories = ArrayHelper::map(
            Category::find()->orderBy('lft')->asArray()->all(),
            'id',
            function ($category) {
                return self::getDecoratedName($category);
            }
        );

        if (!$showRoot) {
            unset($categories[1]);
        }

        return $categories;
    }

    public static function getDecoratedName($category)
    {
        return ($category['depth'] > 0 ? str_repeat('--- ', $category['depth'] - 1) : '') . $category['name'];
    }

    public static function strNames(array $categories): string
    {
        return implode(', ', ArrayHelper::getColumn($categories, 'name'));
    }
}