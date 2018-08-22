<?php

namespace frontend\widgets;

use yii\web\AssetBundle;

class BannerAsset extends AssetBundle
{
    public $sourcePath = '@frontend/widgets/dist';
    public $js = [
        'banner.js',
    ];
    public $css = [
    ];
    public $depends = [
        'frontend\assets\OwlCarouselAsset',
    ];
}