<?php
class Point {
  
  public $x;
  public $y;

	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
  }
  
  public static function create_from_array($array) {
     return new Point($array['x'], $array['y']);
  }

}
?>