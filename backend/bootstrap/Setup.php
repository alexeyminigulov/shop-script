<?php

namespace backend\bootstrap;

use domain\services\CategoryService;
use yii\base\BootstrapInterface;
use Yii;

class Setup implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = Yii::$container;

        $container->setSingleton(CategoryService::class);
    }
}