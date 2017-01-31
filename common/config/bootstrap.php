<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

Yii::$container->set(\common\crawler\SerializeInterface::class, ['class' => \common\crawler\XmlSerializer::class, 'pathToFile+' => '/tmp/common/file/xml/']);
Yii::$container->set('requestCrawler', [
    'class' => \common\crawler\RequestCrawler::class,
    'pathToFile' => '/tmp/common/file/xml/'
]);
