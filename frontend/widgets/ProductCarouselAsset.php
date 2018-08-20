<?php

namespace frontend\widgets;

use yii\web\AssetBundle;

class ProductCarouselAsset extends AssetBundle
{
    public $sourcePath = '@frontend/widgets/dist';
    public $js = [
        'productCarousel.js',
    ];
    public $css = [
        'css/productCarousel.css',
    ];
    public $depends = [
        'frontend\assets\AppAsset',
    ];
}