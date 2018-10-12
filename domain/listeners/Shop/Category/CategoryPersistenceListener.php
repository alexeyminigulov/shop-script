<?php

namespace domain\listeners\Shop\Category;

use Yii;
use domain\jobs\Shop\Category\CategoryPersistenceNotificator;

class CategoryPersistenceListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new CategoryPersistenceNotificator($event->category));
    }
}