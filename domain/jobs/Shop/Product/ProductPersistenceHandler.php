<?php

namespace domain\jobs\Shop\Product;

use domain\entities\Shop\Product\Product;
use yii\caching\Cache;
use yii\caching\TagDependency;

class ProductPersistenceHandler
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function handle(ProductPersistenceNotificator $parent)
    {
        if (!$parent->product instanceof Product) {
            throw new \DomainException('Passed parameter is not Product');
        }
        TagDependency::invalidate($this->cache, ['products']);
    }
}