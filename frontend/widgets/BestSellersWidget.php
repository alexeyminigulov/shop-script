<?php

namespace frontend\widgets;

use domain\entities\Shop\Product\Product;
use yii\base\Widget;

class BestSellersWidget extends Widget
{
    /** @var $bestSellers Product[] */
    private $bestSellers;

    public function init()
    {
        parent::init();
        $this->bestSellers = Product::find()->limit(5)->joinWith(['mainPicture'])->all();
    }

    public function run()
    {
        $content = '';

        foreach ($this->bestSellers as $index => $bestSeller) {

            $content .= $this->getContent(++$index, $bestSeller);
        }

        $result = $this->getTemplate($content);

        return $result;
    }

    private function getContent($index, Product $product)
    {
        return $this->render('bestSellers/_template', [
            'index' => $index,
            'product' => $product,
        ]);
    }

    private function getTemplate($content)
    {
        return $this->render('bestSellers/view', ['content' => $content]);
    }
}