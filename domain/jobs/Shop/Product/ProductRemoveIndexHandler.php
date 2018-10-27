<?php

namespace domain\jobs\Shop\Product;

use yii\caching\Cache;
use domain\services\Search\ProductIndexer;
use domain\entities\Shop\Product\Product;

class ProductRemoveIndexHandler
{
    private $cache;
    private $indexer;

    public function __construct(Cache $cache, ProductIndexer $indexer)
    {
        $this->cache = $cache;
        $this->indexer = $indexer;
    }

    public function handle(ProductPersistenceNotificator $parent)
    {
        if (!$parent->product instanceof Product) {
            throw new \DomainException('Passed parameter is not Product');
        }
        $this->indexer->remove($parent->product);
    }
}