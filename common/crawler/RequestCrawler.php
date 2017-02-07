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

    protected $serialize;
    public $pathToFile;

    public function __construct(SerializeInterface $serialize, $config = [])
    {
        $this->serialize = $serialize;

        parent::__construct($config);
    }

    /**
     *  @param array $dataArray
     */
    public function saveToFile($dataArray)
    {
        $encodedString = $this->serialize->encode($dataArray);
        $fp = fopen($_SERVER['DOCUMENT ROOT'].$this->pathToFile.time().".log", "a");
        fwrite($fp, $encodedString);

        return fclose($fp);
    }

}