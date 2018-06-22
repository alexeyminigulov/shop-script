<?php

namespace frontend\bootstrap;

use yii\base\BootstrapInterface;
use yii\mail\MailerInterface;
use Yii;

class Setup implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = Yii::$container;

        $container->setSingleton(MailerInterface::class, function () use ($app) {
            return $app->mailer;
        });
    }
}