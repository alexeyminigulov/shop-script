<?php

namespace frontend\bootstrap;

use yii\base\BootstrapInterface;
use Yii;

class Setup implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = Yii::$container;
    }
}