<?php

return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '<controller:[\w-]+>/index' => 'Shop/<controller>/index',
    ],
];