<?php

namespace domain\listeners\Shop\Product;

use Yii;
use domain\jobs\Shop\Product\ProductPersistenceNotificator;

class ProductPersistenceListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new ProductPersistenceNotificator($event->product));
    }
}