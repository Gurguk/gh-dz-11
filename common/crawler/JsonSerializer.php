<?php

namespace common\crawler;

class JsonSerializer implements SerializeInterface
{

    public function encode($data)
    {
        return json_encode($data);
    }

    public function decode($data)
    {
        return json_decode($data);
    }
}