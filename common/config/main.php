<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'requestCrawler' => common\crawler\RequestCrawlerServiceBuilder::build(
            [
                'class' => 'common\crawler\JsonSerializer',
                'pathToSave' => '/tmp/common/file/json/'
            ],
            '/tmp/'
        ),
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
                'graylog' => [
                    'class' => 'nex\graylog\GraylogTarget',
                    'levels' => ['error', 'warning', 'info'],
                    'categories' => ['application'],
                    'logVars' => [],
                    'host' => '127.0.0.1',
                    'facility' => 'facility-name',
                ],
            ],
        ],
    ],
];
