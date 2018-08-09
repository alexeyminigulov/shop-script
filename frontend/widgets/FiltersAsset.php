<?php

namespace frontend\widgets;

use yii\web\AssetBundle;

class FiltersAsset extends AssetBundle
{
    public $sourcePath = '@frontend/widgets/dist';
    public $js = [
        'filters.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}