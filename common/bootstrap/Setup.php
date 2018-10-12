<?php

namespace common\bootstrap;

use domain\entities\Shop\Product\events\ProductPersistence;
use domain\listeners\Shop\Product\ProductPersistenceListener;
use Yii;
use yii\caching\Cache;
use yii\di\Container;
use domain\dispatcher\EventDispatcher;
use domain\listeners\Shop\Banner\BannerPersistenceListener;
use domain\entities\Shop\Manager\Banner\events\BannerPersistence;
use domain\listeners\Shop\Category\CategoryPersistenceListener;
use domain\repositories\Shop\ValueStorageAdapter;
use domain\readRepositories\Shop\ProductStorageAdapter;
use domain\entities\Shop\Category\events\CategoryPersistence;
use domain\repositories\Shop\CategoryStorageAdapter;
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

        $container->setSingleton(Cache::class, function (Container $container) use ($app) {
            return $app->cache;
        });

        $container->setSingleton(EventDispatcherInterface::class, function (Container $container) {
            return new EventDispatcher([
                UserConfirmEmail::class => [
                    [$container->get(UserConfirmEmailListener::class), 'handle'],
                ],
                CategoryPersistence::class => [
                    [$container->get(CategoryPersistenceListener::class), 'handle'],
                ],
                BannerPersistence::class => [
                    [$container->get(BannerPersistenceListener::class), 'handle'],
                ],
                ProductPersistence::class => [
                    [$container->get(ProductPersistenceListener::class), 'handle'],
                ],
            ]);
        });

        $container->setSingleton(CategoryStorageAdapter::class);

        $container->setSingleton(ProductStorageAdapter::class);

        $container->setSingleton(ValueStorageAdapter::class);
    }
}