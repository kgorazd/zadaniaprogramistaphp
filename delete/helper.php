<?php
class Helper {
   
  public static function get_response($url) {
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 5);
    $response = curl_exec($ch);
    if(!$response) {
        echo curl_error($ch);
    }
    curl_close($ch);
    return $response;
  }
  
  public static function check_weather($city_name) {
    $url = "http://api.openweathermap.org/data/2.5/find?units=metric&q=".$city_name;
//     $url = "http://api.openweathermap.org/data/2.5/weather?q=Olsztyn,pl&mode=xml";
    $response = Helper::get_response($url);
//     var_dump($response);
//     var_dump(sizeof($response));
    echo '<br>';
    $result = $response;
    $result = json_decode($response);
//     print_r($result);
    return $result;
  }
  
  public static function check_weather_for_array($city_names) {
    $result = [];
    foreach ($city_names as $city_name) {
      $pom = Helper::check_weather($city_name);
      $result[$city_name] = $pom->list[0]->main;
    }
    return $result;
  }
  
  public static function show_for_cities() {
    $pogoda = Helper::check_weather_for_array(['olsztyn', 'rzeszow']);

echo '<br>';
echo '<table>';
  echo '<tr>';
    echo '<th>';
      echo 'miasto';
    echo '</th>';
    echo '<th>';
      echo 'temp';
    echo '</th>';
    echo '<th>';
      echo 'cisnienie';
    echo '</th>';
  echo '</tr>';

  foreach ($pogoda as $city_name => $city_weather) {
    echo '<tr>';
      echo '<td>';
        echo $city_name;
      echo '</td>';
      echo '<td>';
        echo $city_weather->temp;
      echo '</td>';
      echo '<td>';
        echo $city_weather->pressure;
      echo '</td>';
    echo '</tr>';
  }
echo '</table>';
echo '<br>';
  }
  
    public static function show_for_many($response_with_many) {
//     $pogoda = Helper::check_weather_for_array(['olsztyn', 'rzeszow']);

echo '<br>';
echo '<table>';
  echo '<tr>';
    echo '<th>';
      echo 'miasto';
    echo '</th>';
    echo '<th>';
      echo 'temp';
    echo '</th>';
    echo '<th>';
      echo 'cisnienie';
    echo '</th>';
  echo '</tr>';

      $pogoda = $response_with_many['list'];
  foreach ($pogoda as $city_weather) {
    echo '<tr>';
      echo '<td>';
        echo $city_weather->name;
      echo '</td>';
      echo '<td>';
        echo $city_weather->main->temp;
      echo '</td>';
      echo '<td>';
        echo $city_weather->main->pressure;
      echo '</td>';
    echo '</tr>';
  }
echo '</table>';
echo '<br>';
  }
  
  public static function exec() {
$o = Helper::check_weather('olsztyn');
echo '<br>';
echo '------------------------------------------------------';
echo '<br>';
echo '------------------------------------------------------';
echo '<br>';
echo '------------------------------------------------------';
echo '<br>';
$w = Helper::check_weather('rzeszow');

echo '<br>';
echo '<br>';
$olsztyn = $w->list[0]->main;
// var_dump($olsztyn);
echo '<br>';
$rzeszow = $w->list[0]->main;
// var_dump($rzeszow);

// $arr = [];
// array_push($arr, $olsztyn);
// array_push($arr, $rzeszow);

Helper::show_for_cities();
}
  
}

?>