<?php

namespace frontend\widgets;

use yii\web\AssetBundle;

class YandexMapAsset extends AssetBundle
{
    public $sourcePath = '@frontend/widgets/dist';
    public $js = [
        'https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=44dff38f-a85a-478e-8a73-e00c31637833',
        'yandex-map.js',
    ];
}