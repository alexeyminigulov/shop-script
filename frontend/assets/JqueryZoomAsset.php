<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class JqueryZoomAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/jquery-zoom';

    public $js = [
        'jquery.zoom.min.js'
    ];

    public $depends = [
        'frontend\assets\AppAsset',
    ];
}
