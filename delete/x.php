<?php

require_once('helper.php');

$url = "http://api.openweathermap.org/data/2.5/find?q=Olsztyn,pl";

$xml = file_get_contents($url);
// $xml = simplexml_load_string($url);
$xml = Helper::get_response($url);

file_put_contents('xx.xml', $xml);

// str_replace('@', '', $xml);
var_dump($xml);

$xml = simplexml_load_string($xml);
echo '<br>';
print_r($xml);

echo '<br>';
echo '<br>';
  echo '<br>';
  echo '<br>';
echo '-------------------------------';


// print_r($xml->list->item->temperature->attributes()->value);
// $json = json_encode($xml);
?>
