<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\caching\TagDependency;
use domain\entities\Shop\Product\Product;

class BestSellersWidget extends Widget
{
    /** @var $bestSellers Product[] */
    private $bestSellers;

    public function init()
    {
        parent::init();

        $cacheKey = 'best-sellers-widget';
        if (!$bestSellers = Yii::$app->cache->get($cacheKey)) {

            $bestSellers = Product::find()->limit(5)->joinWith(['mainPicture'])->all();
            Yii::$app->cache->set($cacheKey, $bestSellers, null, new TagDependency([
                'tags' => ['shop', 'best-sellers'],
            ]));
        }
        $this->bestSellers = $bestSellers;
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