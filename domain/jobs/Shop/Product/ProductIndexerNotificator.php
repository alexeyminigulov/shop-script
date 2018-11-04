<?php

namespace domain\jobs\Shop\Product;

use yii\queue\Job;
use domain\entities\Shop\Product\Product;

class ProductIndexerNotificator implements Job
{
    public $product;
    private $className;

    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->className = substr(get_class($this), 0, -11) . 'Handler';
    }

    public function execute($queue)
    {
        $handler = $this->resolveHandler();

        $handler($this, $queue);
    }

    private function resolveHandler()
    {
        return [\Yii::createObject($this->className), 'handle'];
    }
}