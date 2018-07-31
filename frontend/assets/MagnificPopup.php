<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class MagnificPopup extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/magnific-popup/dist';

    public $js = [
        'jquery.magnific-popup.js',
    ];

    public $css = [
        'magnific-popup.css',
    ];

    public $depends = [
        'frontend\assets\AppAsset',
    ];
}
