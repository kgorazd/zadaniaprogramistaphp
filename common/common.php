<?php

  function pr($msg) {
    echo '<br/>';
    $msg = smart_value($msg);
    print_r($msg);
    echo '<br/>';
  }

  function vd($var) {
    echo '<br/>';
    var_dump($var);
  }

  function smart_value($var) {
    if($var===true)
      return 'TRUE';
    else if($var===false)
      return 'FALSE';
    else
      return $var;
  }

  function my_date($arg) {
    return date('m/d/Y', $arg);
  }

?>