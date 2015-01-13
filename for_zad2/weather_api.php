<?php
class WeatherApi {
  
  private static $base_url = "http://api.openweathermap.org/data/2.5/find?q=";
  
  private static function parse_weather($json_weather) {
    $result=[];
    $result['name']=$json_weather->list[0]->name;
    $result['temp']=$json_weather->list[0]->main->temp;
    $result['pressure']=$json_weather->list[0]->main->pressure;
    $result['date']=date('m/d/Y', $json_weather->list[0]->dt);
    return $result;
  }
  
  private static function get_raw_weather($city_name) {
    $url = WeatherApi::$base_url.$city_name;
    return ApiHelper::get_response($url);
  }
  
  public static function get_weather($city_name) {
    $url = WeatherApi::$base_url.$city_name;
    $decoded_response = ApiHelper::get_decoded_response($url);
    return WeatherApi::parse_weather($decoded_response);
  }
  
  public static function get_weather_for_city_names(Array $city_names) {
    $result = [];
    foreach($city_names as $city_name) {
      array_push($result, WeatherApi::get_weather($city_name));
    }
    return $result;
  }
  
}
?>