<?php

namespace common\crawler;

use SimpleXMLElement;

class XmlSerializer implements SerializeInterface
{

    public function encode($data)
    {
        $xml = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
        $this->array_to_xml($data, $xml);

        return $xml->asXML();
    }

    public function decode($data)
    {
        $xml = simplexml_load_string($data, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);

        return json_decode($json,TRUE);
    }

    function array_to_xml( $data, &$xml_data ) {
        foreach( $data as $key => $value ) {
            if( is_numeric($key) ){
                $key = 'item'.$key;
            }
            if( is_array($value) ) {
                $subnode = $xml_data->addChild($key);
                $this->array_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }
}