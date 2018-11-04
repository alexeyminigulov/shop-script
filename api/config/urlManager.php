<?php

return [
    'class' => 'yii\web\UrlManager',
    'baseUrl' => '',
    'hostInfo' => $params['apiDomain'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        'profile' => 'user/profile/index',
        'POST oauth2/<action:\w+>' => 'oauth2/rest/<action>',

        'product' => 'shop/product/index',
        'product/<id:\d+>' => 'shop/product/view',
//        '<controller:[\w-]+>/index' => 'shop/<controller>/index',
    ],
];