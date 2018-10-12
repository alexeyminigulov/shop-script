<?php

namespace domain\listeners;

use Yii;
use domain\jobs\User\UserConfirmEmailNotificator;

class UserConfirmEmailListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new UserConfirmEmailNotificator($event->user));
    }
}