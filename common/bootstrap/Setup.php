<?php

namespace common\bootstrap;

use Yii;
use yii\di\Container;
use yii\caching\Cache;
use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use domain\entities\Shop\Product\events\ProductRemove;
use domain\entities\Shop\Product\events\ProductPersistence;
use domain\entities\User\events\UserSignupConfirmed;
use domain\listeners\Shop\Product\ProductPersistenceListener;
use domain\listeners\Shop\Product\ProductRemoveIndexListener;
use domain\listeners\Shop\Product\ProductIndexerListener;
use domain\listeners\UserSignupConfirmedListener;
use domain\services\mailer\MailChimp;
use domain\services\mailer\Newsletter;
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

        $container->setSingleton(Client::class, function (Container $container) use ($app) {
            return ClientBuilder::create()->setHosts([$app->params['hostES']])->build();
        });

        $container->setSingleton(Newsletter::class, function (Container $container) use ($app) {
            return new MailChimp(new \DrewM\MailChimp\MailChimp($app->params['mailChimpKey']),
                $app->params['mailChimpListId']);
        });

        $container->setSingleton(EventDispatcherInterface::class, function (Container $container) {
            return new EventDispatcher([
                UserConfirmEmail::class => [
                    [$container->get(UserConfirmEmailListener::class), 'handle'],
                ],
                UserSignupConfirmed::class => [
                    [$container->get(UserSignupConfirmedListener::class), 'handle'],
                ],
                CategoryPersistence::class => [
                    [$container->get(CategoryPersistenceListener::class), 'handle'],
                ],
                BannerPersistence::class => [
                    [$container->get(BannerPersistenceListener::class), 'handle'],
                ],
                ProductPersistence::class => [
                    [$container->get(ProductPersistenceListener::class), 'handle'],
                    [$container->get(ProductIndexerListener::class), 'handle'],
                ],
                ProductRemove::class => [
                    [$container->get(ProductPersistenceListener::class), 'handle'],
                    [$container->get(ProductRemoveIndexListener::class), 'handle'],
                ],
            ]);
        });

        $container->setSingleton(CategoryStorageAdapter::class);

        $container->setSingleton(ProductStorageAdapter::class);

        $container->setSingleton(ValueStorageAdapter::class);
    }
}