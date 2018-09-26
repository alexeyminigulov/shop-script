<?php

namespace domain\listeners;

use Yii;
use domain\jobs\User\UserConfirmEmailNotificator;
use domain\entities\User\User;
use yii\mail\MailerInterface;

class UserConfirmEmailListener
{
    public function handle($event)
    {
        Yii::$app->queue->push(new UserConfirmEmailNotificator($event->user));
    }
}