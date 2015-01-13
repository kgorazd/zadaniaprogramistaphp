<?php
class Line {
  
  public $a;
  public $b;
  public $c;

	public function __construct($a, $b, $c) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
  }
  
  public static function create_from_array($array) {
    return new Line($array['a'], $array['b'], $array['c']);
  }

	public function is_perpendicular(Line $other_line) {
    return $this->a*$other_line->a==-1;
  }

	public function is_parallel(Line $other_line) {
		return $this->a==$other_line->a;
  }

}
?>