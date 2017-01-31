<?php

namespace common\crawler;

interface SerializeInterface
{

    public function encode($data);

    public function decode($data);
}