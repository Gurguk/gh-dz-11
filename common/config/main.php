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
    ],
];
