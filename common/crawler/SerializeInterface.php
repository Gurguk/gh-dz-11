<?php


interface SerializeInterface
{

    public function encode($data);

    public function decode($data);
}