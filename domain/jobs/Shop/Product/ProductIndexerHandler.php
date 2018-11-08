<?php

namespace domain\jobs\Shop\Product;

use yii\caching\Cache;
use domain\services\Search\ProductIndexer;
use domain\entities\Shop\Product\Product;

class ProductIndexerHandler
{
    private $cache;
    private $indexer;

    public function __construct(Cache $cache, ProductIndexer $indexer)
    {
        $this->cache = $cache;
        $this->indexer = $indexer;
    }

    public function handle(ProductIndexerNotificator $parent)
    {
        if (!$parent->product instanceof Product) {
            throw new \DomainException('Passed parameter is not Product');
        }
        $this->indexer->index($parent->product);
    }
}