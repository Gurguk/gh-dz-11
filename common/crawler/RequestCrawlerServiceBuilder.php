<?php

namespace common\crawler;
use \common\crawler\SerializerInterface;

class RequestCrawlerServiceBuilder
{
    public static function build($serializeConfig, $pathToFile)
    {
        return function () use ($serializeConfig, $pathToFile) {
            $serialize = \Yii::createObject($serializeConfig);
            $requestCrawler = new RequestCrawler($serialize, ['pathToFile' => $pathToFile]);
            return $requestCrawler;
        };
    }
}