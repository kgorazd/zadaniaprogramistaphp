<?php

function show_weather_table($array_of_weather) {
echo '<h1>CURRENT WEATHER</h1>';
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
    echo '<th>';
      echo 'date';
    echo '</th>';
  echo '</tr>';

  foreach ($array_of_weather as $city_weather) {
    echo '<tr>';
      echo '<td>';
        echo $city_weather['name'];
      echo '</td>';
      echo '<td>';
        echo $city_weather['temp'];
      echo '</td>';
      echo '<td>';
        echo $city_weather['pressure'];
      echo '</td>';
      echo '<td>';
        echo $city_weather['date'];
      echo '</td>';
    echo '</tr>';
  }
echo '</table>';
echo '<br>';
  }

  function show_forecast_chart($decoded_forecast_array, $property_name, $div_id) {
    echo "<h1>FORECAST {$property_name}</h1>";
    echo '<canvas id="'.$div_id.'" width="400" height="400"></canvas>';
    echo '<script src="js/Chart.js"></script>';
    echo '<script src="js/jquery-2.1.3.min.js"></script>';
    echo '<script src="js/forecast.js"></script>';
    echo '<script>';
    echo 'fun('.json_encode(ForecastApi::prepare_chart_data($decoded_forecast_array, $property_name)).', "#'.$div_id.'");';
    echo '</script>';
  }

?>