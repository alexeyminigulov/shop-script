<?php

namespace common\bootstrap;

use yii\base\BootstrapInterface;
use yii\di\Container;
use domain\services\UserService;
use domain\repositories\UserRepository;
use yii\mail\MailerInterface;

class Setup implements BootstrapInterface
{
    public function bootstrap($app)
    {
        /* @var $container Container */
        $container = \Yii::$container;

        $container->setSingleton(UserRepository::class);

        $container->setSingleton(MailerInterface::class, function () use ($app) {
            /* @var MailerInterface */
            return $app->mailer;
        });
    }
}