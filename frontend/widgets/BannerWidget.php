<?php

namespace frontend\widgets;

use yii\base\Widget;
use domain\entities\Shop\Manager\Banner;

class BannerWidget extends Widget
{
    /** @var $banners Banner[] */
    private $banners;

    public function init()
    {
        parent::init();
        $this->banners = Banner::find()->limit(3)->all();

    }

    public function run()
    {
        $this->registerClientScript();

        $result = $this->getTemplate();

        return $result;
    }

    private function registerClientScript()
    {
        $view = $this->getView();
        BannerAsset::register($view);
    }

    private function getTemplate()
    {
        return $this->render('banner/view', ['banners' => $this->banners]);
    }
}