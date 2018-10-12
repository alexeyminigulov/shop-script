<?php

namespace domain\listeners\Shop\Banner;

use Yii;
use domain\jobs\Shop\Banner\BannerPersistenceNotificator;

class BannerPersistenceListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new BannerPersistenceNotificator($event->banner));
    }
}