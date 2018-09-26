<?php

namespace common\bootstrap;

use Yii;
use domain\dispatcher\EventDispatcher;
use yii\di\Container;
use domain\dispatcher\EventDispatcherInterface;
use domain\entities\User\events\UserConfirmEmail;
use domain\listeners\UserConfirmEmailListener;
use yii\base\BootstrapInterface;
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

        $container->setSingleton(EventDispatcherInterface::class, function (Container $container) {
            return new EventDispatcher([
                UserConfirmEmail::class => [
                    [$container->get(UserConfirmEmailListener::class), 'handle'],
                ],
            ]);
        });
    }
}