<?php

namespace domain\readRepositories\Shop;

use Yii;
use yii\caching\TagDependency;
use yii\caching\Cache;
use domain\entities\Shop\Product\Product;

class ProductStorageAdapter
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function getMinPrice(): int
    {
        $cacheKey = 'min-price';
        if (!$minPrice = $this->cache->get($cacheKey)) {

            $minPrice = Product::find()->min('price');
            Yii::$app->cache->set($cacheKey, $minPrice, null, new TagDependency([
                'tags' => ['shop', 'products'],
            ]));
        }
        return $minPrice;
    }

    public function getMaxPrice(): int
    {
        $cacheKey = 'max-price';
        if (!$maxPrice = $this->cache->get($cacheKey)) {

            $maxPrice = Product::find()->max('price');
            Yii::$app->cache->set($cacheKey, $maxPrice, null, new TagDependency([
                'tags' => ['shop', 'products'],
            ]));
        }
        return $maxPrice;
    }
}