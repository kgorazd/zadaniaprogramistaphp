<?php
class GeometryHelper {

	public static function is_on_line(Point $point, Line $line) {
    return -$point->y*$line->b==$point->x*$line->a+$line->c;
  }
  
  public static function distance_from_line(Point $point, Line $line) {
    $up = $point->x*$line->a + $point->y*$line->b + $line->c;
    if ($up<0){
      $up = $up*-1;
    }
    $down = $line->a*$line->a+$line->b*$line->b;
    $down = sqrt($down);
    $down = $down==0 ? 1 : $down;
//     TODO division by zero
    return $up/$down;
  }

}
?>