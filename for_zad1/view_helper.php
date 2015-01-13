<?php
  function get_line_value($index, $name, $default) {
    return ($_POST)  ? $_POST['line'][$index][$name] : $default;
  }

  function get_point_value($name, $default) {
    return ($_POST)  ? $_POST['point'][$name] : $default;
  }

  function create_result_row($name, $function_result) {
    echo '<tr>';
      echo '<td>';
        echo $name;
      echo '</td>';
      echo '<td>';
        echo smart_value($function_result);
      echo '</td>';
    echo '</tr>';
  }

  function calculateFromPost() {
    $line_1=Line::create_from_array($_POST['line'][0]);
	  $line_2=Line::create_from_array($_POST['line'][1]);
    $point =Point::create_from_array($_POST['point']);
    include 'for_zad1/result_view.php';
  }
?>