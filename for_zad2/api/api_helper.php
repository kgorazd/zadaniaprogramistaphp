<?php
class ApiHelper {
  
  public static function get_curl_response($url) {
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
    
  public static function get_response($url) {
//     $response = file_get_contents($url);
    $response = ApiHelper::get_curl_response($url);
    return $response;
  }
  
  public static function get_decoded_response($url) {
    $response = ApiHelper::get_response($url);
    $decoded_response = json_decode($response);
    return $decoded_response;
  }
  
}
?>