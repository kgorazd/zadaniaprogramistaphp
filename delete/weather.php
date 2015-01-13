<?php

  class Weather {
    
    public $city;
    public $temp;
    public $pressure;

    public function __construct($city, $temp, $pressure) {
      $this->city = $city;
      $this->temp = $temp;
      $this->pressure = $pressure;
    }
    
  }

?>