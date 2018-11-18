<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'adminPermission' => 'admin',
        ],
        'redactor' => 'yii\redactor\RedactorModule',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
