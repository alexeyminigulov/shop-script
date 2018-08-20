<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class OwlCarouselAsset extends AssetBundle
{
    public $sourcePath = '@webroot/js';

    public $js = [
        'owl.carousel.min.js',
    ];

    public $css = [];

    public $depends = [
        'frontend\assets\AppAsset',
    ];
}