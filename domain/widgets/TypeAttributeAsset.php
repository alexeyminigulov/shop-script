<?php

namespace domain\widgets;

use yii\web\AssetBundle;

class TypeAttributeAsset extends AssetBundle
{
    public $sourcePath = '@domain/widgets/dist';
    public $js = [
        'type-attribute.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}