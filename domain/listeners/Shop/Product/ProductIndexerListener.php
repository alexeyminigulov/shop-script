<?php

namespace domain\listeners\Shop\Product;

use Yii;
use domain\jobs\Shop\Product\ProductIndexerNotificator;

class ProductIndexerListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new ProductIndexerNotificator($event->product));
    }
}