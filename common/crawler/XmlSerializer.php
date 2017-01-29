<?php

class XmlSerializer implements SerializeInterface
{

    public function encode($data)
    {
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($data, array ($xml, 'addChild'));

        return $xml->asXML();
    }

    public function decode($data)
    {
        $xml = simplexml_load_string($data, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);

        return json_decode($json,TRUE);
    }
}