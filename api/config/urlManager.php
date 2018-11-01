<?php

return [
    'class' => 'yii\web\UrlManager',
    'baseUrl' => '',
    'hostInfo' => $params['apiDomain'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
//        '<controller:[\w-]+>/index' => 'shop/<controller>/index',
    ],
];