<!DOCTYPE HTML>
<html> 
  <head>
  </head>
  <body>
    <?php 
      include 'shared_views/menu.html';
      require_once('for_zad2/init.php');

      $filename = 'saved_weather.xml';
      include 'for_zad2/form_view.php';
      if($_POST) {
        $string = $_POST['cities'];
        $string = str_replace(' ', '', $string);
        $city_names = explode(',',$string);
      }
      else {
        $city_names = ['Olsztyn', 'Rzeszow'];
      }
      $weather_array = WeatherApi::get_weather_for_city_names($city_names);
      XMLSaver::save_array_as_xml($weather_array, 'weather', $filename);
      show_weather_table($weather_array);
      $forecast_data = ForecastApi::get_forecast_array($city_names);
      show_forecast_chart($forecast_data, 'pressure', 'pressure');
      show_forecast_chart($forecast_data, 'temp->day', 'temp');
    ?>
  </body>
</html>
