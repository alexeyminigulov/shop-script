<?php

namespace domain\helpers;

use domain\entities\Shop\Brand;
use yii\helpers\ArrayHelper;

class BrandHelper
{
    public static function list(): array
    {
        return ArrayHelper::map(
            Brand::find()->asArray()->all(),
            'id',
            'name'
        );
    }
}