<?php

namespace frontend\widgets;

use yii\base\Widget;
use domain\entities\Shop\Product\Product;

class ProductCarousel extends Widget
{
    /** @var $products Product[] */
    private $products;

    public function init()
    {
        parent::init();
        $this->products = Product::find()->limit(10)->joinWith(['mainPicture'])->all();
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
