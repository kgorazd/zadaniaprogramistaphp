<?php

require_once('point.php');
require_once('line.php');
require_once('geometry_helper.php');
require_once('common.php');



  function calculateFromPost() {
    $line_1=Line::create_from_array($_POST['line'][0]);
	  $line_2=Line::create_from_array($_POST['line'][1]);
    $point =Point::create_from_array($_POST['point']);
    echo '<div id="mydiv" style="width:200px;background:yellow">';
    pr($line_1->is_rownolegla($line_2));
    pr($line_2->is_rownolegla($line_1));
    pr($line_1->is_prostopadla($line_2));
    pr($line_2->is_prostopadla($line_1));
    vd($line_1);
//     echo '<br>';
//     var_dump($point);
//     echo '<br>';
      pr(GeometryHelper::czy_na_prostej($point, $line_1));
      pr(GeometryHelper::czy_na_prostej($point, $line_2));
      pr(GeometryHelper::odleglosc_od_prostej($point, $line_1));
      pr(GeometryHelper::odleglosc_od_prostej($point, $line_2));
    echo '</div>';
  }


//   $var_array = array("a" => 1,
//                    "b"  => 1,
//                    "c" => 1);
//   $p1=Line::create_from_array($var_array);
 	$p1=new Line(1,1,1);
	$p2=new Line(1,2,3);
// 	echo $p1;
// 	echo $p2;
	pr($p1->is_rownolegla($p2));
	pr($p2->is_rownolegla($p1));
	pr($p1->is_prostopadla($p2));
	pr($p2->is_prostopadla($p1));

  $pk1 = new Point(1,1);
  $pk2 = new Point(-2,1);

  pr(GeometryHelper::czy_na_prostej($pk1, $p1));
  pr(GeometryHelper::czy_na_prostej($pk2, $p1));
  pr(GeometryHelper::odleglosc_od_prostej($pk1, $p1));
  pr(GeometryHelper::odleglosc_od_prostej($pk2, $p1));
  echo '<br>';
  

  pr('ssss');
  var_dump($_POST);

  pr(sizeof($_POST));

  if(count($_POST)) {
    calculateFromPost();
  }

?>

<canvas id="myCanvas" style="background:green">
  
</canvas>
<script>
  
var f = function(a, b, c, x) {
  var res = -a*x-c;
  return res;
}

 
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
// ctx.moveTo(0,0);
// ctx.lineTo(200,100);
// ctx.moveTo(-2,f(1,1,-1,-2));
// ctx.lineTo(2,f(1,1,-1,2));
ctx.moveTo(0,200-0);
// ctx.lineTo(100,200-100);
ctx.lineTo(200,200-200);
ctx.stroke();
</script>

<!DOCTYPE HTML>
<html> 
<body>

<?php include 'form.php' ?>

</body>
</html>


hello