<?php

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.83.*'],
    ];

    $config['components'] = [
        'robokassa' => [
            'class' => '\robokassa\Merchant',
            'baseUrl' => 'https://auth.robokassa.ru/Merchant/Index.aspx',
            'sMerchantLogin' => 'martixsite',
            'sMerchantPass1' => 'OW46uJjcwO34DRJgKLE5',
            'sMerchantPass2' => 'UTdWH5778esShd0KHhCf',
            'isTest' => !YII_ENV_PROD,
        ],
    ];
}

return $config;
