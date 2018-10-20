<?php

namespace domain\listeners;

use Yii;
use domain\jobs\User\UserSignupConfirmedNotificator;

class UserSignupConfirmedListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new UserSignupConfirmedNotificator($event->user));
    }
}