<?php

namespace domain\widgets;

use yii\web\AssetBundle;

class DynamicInputAsset extends AssetBundle
{
    public $sourcePath = '@domain/widgets/dist';
    public $js = [
        'dynamic.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}