<?php

namespace frontend\bootstrap;

use domain\cart\Cart;
use domain\cart\cost\calculator\SimpleCost;
use domain\cart\storage\SessionStorage;
use yii\base\BootstrapInterface;
use Yii;

class Setup implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = Yii::$container;

        $container->setSingleton(SessionStorage::class, [], [
            'abc',
        ]);

        $container->setSingleton(Cart::class, function ($container, $params, $config) {
            return new Cart(new SessionStorage('cart_one', $container->get('yii\web\Session')), new SimpleCost());
        });
    }
}