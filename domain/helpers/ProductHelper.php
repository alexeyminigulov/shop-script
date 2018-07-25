<?php

namespace domain\helpers;

use domain\entities\Shop\Product\Product;

class ProductHelper
{
    public static function getListStatus()
    {
        return [
            Product::STATUS_ACTIVE => 'active',
            Product::STATUS_HIDE => 'not active',
        ];
    }

    public static function statusName($id)
    {
        return self::getListStatus()[$id];
    }
}