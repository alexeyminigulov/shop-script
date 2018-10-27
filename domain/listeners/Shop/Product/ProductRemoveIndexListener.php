<?php

namespace domain\listeners\Shop\Product;

use Yii;
use domain\jobs\Shop\Product\ProductRemoveIndexNotificator;

class ProductRemoveIndexListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new ProductRemoveIndexNotificator($event->product));
    }
}