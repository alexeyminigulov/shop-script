<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\caching\TagDependency;
use domain\entities\Shop\Product\Product;

class ProductCarousel extends Widget
{
    /** @var $products Product[] */
    private $products;

    public function init()
    {
        parent::init();

        $cacheKey = 'product-carousel-products';
        if (!$products = Yii::$app->cache->get($cacheKey)) {

            $products = Product::find()->limit(10)->joinWith(['mainPicture'])->all();
            Yii::$app->cache->set($cacheKey, $products, null, new TagDependency([
                'tags' => ['shop', 'products'],
            ]));
        }
        $this->products = $products;
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
        ProductCarouselAsset::register($view);
    }

    private function getTemplate()
    {
        return $this->render('productCarousel/view', ['products' => $this->products]);
    }
}
