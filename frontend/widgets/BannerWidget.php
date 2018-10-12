<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\caching\TagDependency;
use domain\entities\Shop\Manager\Banner\Banner;

class BannerWidget extends Widget
{
    /** @var $banners Banner[] */
    private $banners;

    public function init()
    {
        parent::init();

        $cacheKey = 'banner-widget-banners';
        if (!$banners = Yii::$app->cache->get($cacheKey)) {

            $banners = Banner::find()->limit(3)->all();
            Yii::$app->cache->set($cacheKey, $banners, null, new TagDependency([
                'tags' => ['shop', 'banners'],
            ]));
        }
        $this->banners = $banners;
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