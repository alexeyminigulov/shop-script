<?php

return [
    'class' => 'yii\web\UrlManager',
    'baseUrl' => '',
    'hostInfo' => $params['frontendDomain'],
    'enablePrettyUrl' => true,
    'enableStrictParsing' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        'catalog/<slug:[\w\-]+>' => 'shop/catalog/view',
        'product/<slug:[\w\-]+>' => 'shop/product/view',
        'comment/<slug:[\w\-]+>' => 'shop/product/comment',
        'search' => 'shop/product/search',
        'cart' => 'shop/cart/index',
        'cart/<action:\w+>' => 'shop/cart/<action>',
        'cabinet' => 'cabinet/profile/update',
        'cabinet/order' => 'cabinet/order/index',
        'cabinet/order/<id:\d+>' => 'cabinet/order/view',
        'post' => 'blog/post/index',
        'post/<id:\d+>' => 'blog/post/view',
        'order' => 'shop/order/index',
        '<action:\w+>' => 'site/<action>',

        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<_c:[\w\-]+>/<id:\d+>/<_a:[\w\-]+>' => '<_c>/<_a>',
    ],
];