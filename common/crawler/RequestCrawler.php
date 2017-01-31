<?php

namespace common\crawler;
use yii\base\Component;

/**
 * Created by PhpStorm.
 * User: roman
 * Date: 29.01.17
 * Time: 20:06
 */
class RequestCrawler extends Component
{

    public $serialize;
    public $pathToFile;

    public function __construct(SerializeInterface $serialize, $config = [])
    {
        $this->serialize = $serialize;

        parent::__construct($config);
    }

    /**
     *  @param string $decodetString
     */
    public function saveToFile($decodetString)
    {
        $fp = fopen(__DIR__.$this->pathToFile.time().".log", "a");
        fwrite($fp, $decodetString);

        return fclose($fp);
    }

}