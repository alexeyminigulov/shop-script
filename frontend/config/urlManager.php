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
        'confirm-email' => 'site/confirm-email',
        'reset-password' => 'site/reset-password',

        'product/<slug:[\w\-]+>' => 'shop/product/product/view',
        'comment/<slug:[\w\-]+>' => 'shop/product/product/comment',
        'search'                 => 'shop/product/product/search',

        'newest'                 => 'shop/product/newest/index',
        'best-seller'            => 'shop/product/best-seller/index',

        'cart'                   => 'shop/cart/index',
        'cart/<action:\w+>'      => 'shop/cart/<action>',

        'catalog/<slug:[\w\-]+>' => 'shop/catalog/view',

        'order'                  => 'shop/order/index',

        'post'                   => 'blog/post/index',
        'post/<id:\d+>'          => 'blog/post/view',

        'cabinet'                => 'cabinet/profile/update',

        'cabinet/order'          => 'cabinet/order/index',
        'cabinet/order/<id:\d+>' => 'cabinet/order/view',

        'wish-list'                      => 'cabinet/wishlist/index',
        'wish-list/add'                  => 'cabinet/wishlist/add',
        'wish-list/add-to-cart/<id:\d+>' => 'cabinet/wishlist/add-to-cart',
        'wish-list/delete/<id:\d+>'      => 'cabinet/wishlist/delete',

        '<action:\w+>' => 'site/<action>',

        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<_c:[\w\-]+>/<id:\d+>/<_a:[\w\-]+>' => '<_c>/<_a>',
    ],
];