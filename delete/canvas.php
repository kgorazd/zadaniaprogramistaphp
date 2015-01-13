<!--  TO PRZEROB NA POPRAWNY SKRYPT -->
<canvas id="myCanvas" width="200" height="200"></canvas>
<?php include 'my_canvas.html' ?>
<script>
  
  
  var c = document.getElementById("myCanvas");
  var ctx = c.getContext("2d");
  
// ctx.beginPath();
// ctx.moveTo(0,200-0);
// ctx.lineTo(200,200-200);
// ctx.strokeStyle = '#ff0000';
// ctx.stroke();
  
// draw_best_line(0,0,200,200);
  
//   ctx.fillRect(10,10,1,1);
//   ctx.fillRect(tX(10),tY(10),5,5);
  
  draw_plots();
  
//   draw_eq(1,1,-50);
  
//   draw_dumb_line(tX(0),tY(0),tX(100),tY(100));
//   draw_better_line(0,0,100,100);
//   draw_best_line(0,0,100,100);

  
// ctx.beginPath();
// var x=-1000;
// ctx.moveTo(100+x,200-100-f(1,1,1,x));
// x=1000;
// ctx.lineTo(100+x,200-100-f(1,1,1,x));
// ctx.strokeStyle = '#000000';
// ctx.stroke();
  
//   oForm = document.getElementById("form")
//   oForm = document.forms[0];
//   oText = oForm.elements["line[0][a]"];
  
  var drawLineFromForm = function(form_part_name) {
    oForm = document.getElementById("form")
    a = oForm.elements[form_part_name+"[a]"].value;
    b = oForm.elements[form_part_name+"[b]"].value;
    c = oForm.elements[form_part_name+"[c]"].value;
    draw_eq(a,b,c);
  }
  
  var drawPointFromForm = function(form_part_name) {
    oForm = document.getElementById("form")
    x = parseInt(oForm.elements[form_part_name+"[x]"].value);
    y = parseInt(oForm.elements[form_part_name+"[y]"].value);
//     draw_eq(a,b,c);
//     ctx.fillRect(tX(x),tY(y),5,5);
//     ctx.fillRect(tX(x),tY(10),5,5);
    draw_point(x,y,5);
//     UWAGA FILL RECT WYPELNIA NIE OD SRODKA A OD ROGU
  }
  
  drawLineFromForm('line[0]');
  drawLineFromForm('line[1]');
  
  drawPointFromForm('point');
  
</script>