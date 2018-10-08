<?php

namespace frontend\widgets;

use yii\base\Widget;
use domain\entities\Shop\Product\Product;

class ProductCard extends Widget
{
    /** @var $product Product */
    public $product;

    public function init()
    {
        parent::init();
        if (!$this->product instanceof Product) {
            throw new \DomainException('Variable $product is not instance of Product');
        }
    }

    public function run()
    {
        $result = $this->getTemplate();

        return $result;
    }

    private function getTemplate()
    {
        return $this->render('productCard/view', ['product' => $this->product]);
    }
}