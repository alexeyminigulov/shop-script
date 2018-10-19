<?php

namespace frontend\widgets;

use yii\base\Widget;

class YandexMap extends Widget
{
    public function run()
    {
        $this->registerClientScript();

        $map = '<div id="map" style="width:100%;height:100%;padding:0;margin:0;"></div>';

        return $map;
    }

    private function registerClientScript()
    {
        $view = $this->getView();
        YandexMapAsset::register($view);
    }
}