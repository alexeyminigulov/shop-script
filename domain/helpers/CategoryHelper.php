<?php

namespace domain\helpers;

use domain\entities\Shop\Category;
use yii\helpers\ArrayHelper;

class CategoryHelper
{
    public static function parentList(): array
    {
        return ArrayHelper::map(
            Category::find()->orderBy('lft')->asArray()->all(),
            'id',
            function ($category) {
                return self::getDecoratedName($category);
            }
        );
    }

    public static function getDecoratedName($category)
    {
        return ($category['depth'] > 0 ? str_repeat('--- ', $category['depth'] - 1) : '') . $category['name'];
    }
}