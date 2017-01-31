<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'json' => [
            'class' => 'common\crawler\JsonSerializer',
            'pathToSave' => '/common/file'
        ],
        'xml' => [
            'class' => 'common\crawler\XmlSerializer',
            'pathToSave' => '/common/file'
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
