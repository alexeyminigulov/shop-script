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

    public static function weight($value)
    {
        return $value / 1000 . ' kg';
    }

    public static function price($value)
    {
        $value = number_format($value, 0, '', ' ');

        return "<span>$value</span>&nbsp;<span class=\"ty-rub\">Р</span>";
    }
}