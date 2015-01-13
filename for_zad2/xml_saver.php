<?php

class XMLSaver {
  
  private static function format_xml(SimpleXMLElement $simple_xml) {
    $dom = dom_import_simplexml($simple_xml)->ownerDocument;
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    return $dom->saveXML();
  }
  
  private static function create_xml_from_array($arr, $item_name) {
    $xml = new SimpleXMLElement('<xml/>');
    
    foreach ($arr as $obj) {
      $record = $xml->addChild($item_name);
      foreach ($obj as $key => $value) {
        $record->addChild($key, $value);
      }
    }
    $result = XMLSaver::format_xml($xml);
    return $result;
  }
  
  public static function save_array_as_xml($arr, $item_name='object', $filepath) {
    $xml_to_save=XMLSaver::create_xml_from_array($arr, $item_name);
    FileIO::save_to_file($xml_to_save, $filepath);
  }
  
}

?>