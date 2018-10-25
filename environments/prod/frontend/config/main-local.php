<?php
return [
    'components' => [
        'robokassa' => [
            'class' => '\robokassa\Merchant',
            'baseUrl' => 'https://auth.robokassa.ru/Merchant/Index.aspx',
            'sMerchantLogin' => 'martixsite',
            'sMerchantPass1' => 'OW46uJjcwO34DRJgKLE5',
            'sMerchantPass2' => 'UTdWH5778esShd0KHhCf',
            'isTest' => !YII_ENV_PROD,
        ],
    ],
];
