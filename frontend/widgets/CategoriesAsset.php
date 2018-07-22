<?php

namespace frontend\widgets;

use yii\web\AssetBundle;

class CategoriesAsset extends AssetBundle
{
    public $sourcePath = '@frontend/widgets/dist';
    public $js = [
        'catalog.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}