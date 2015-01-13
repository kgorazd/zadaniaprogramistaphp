<?php

class ForecastApi {
  
  private static $base_url_prefix = "http://api.openweathermap.org/data/2.5/forecast/daily?q=";
  private static $base_url_suffix = "&units=metric&cnt=7";
  
  public static function get_forecast($city_name='London') {
    $url = ForecastApi::$base_url_prefix.$city_name.ForecastApi::$base_url_suffix;
    $response = ApiHelper::get_decoded_response($url);
    if($response->cod=='404') {
      return null;
    }
    return $response;
  }

  public static function get_forecast_array($city_names) {
    $result = [];
    foreach($city_names as $city_name) {
      $forecast = ForecastApi::get_forecast($city_name);
      if($forecast) {
        array_push($result, $forecast);
      }
    }
    return $result;
  }

  private static function create_labels($decoded_forecast) {
    $labels = array_map(create_function('$o', 'return my_date($o->dt);'), $decoded_forecast->list);
    return $labels;
  }

  private static function create_dataset($decoded_forecast, $property_name) {
    $data = array_map(create_function('$o', 'return $o->'.$property_name.';'), $decoded_forecast->list);
    return $data;
  }

  private static function create_datasets($decoded_forecast_array, $property_name) {
    $datasets = [];
    $i=0;
    foreach($decoded_forecast_array as $forecast) {
      array_push($datasets, (object)['data'=>ForecastApi::create_dataset($forecast, $property_name), 'fillColor'=>"rgba({$i},{$i},{$i},0.2)"]);
      $i=($i+60)%255;
    }
    return $datasets;
  }

  public static function prepare_chart_data($decoded_forecast_array, $property_name) {
    $data = (object)[];
    $data->labels=ForecastApi::create_labels($decoded_forecast_array[0]);
    $data->datasets=ForecastApi::create_datasets($decoded_forecast_array, $property_name);
    return $data;
  }
  
}

?>