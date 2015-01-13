
  function initCanvas(canvasId) {
    var c = document.getElementById(canvasId);
    ctx = c.getContext("2d");
    ctx.clearRect ( 0 , 0 , c.width, c.height );
    draw_plots();
    drawLineFromForm('line[0]');
    drawLineFromForm('line[1]');
    drawPointFromForm('point');
  }

  function f(a, b, c, x) {
    var res = -a*x-c;
    b = b===0 ? 1 : b;
    res /= b;
    return res;
  }
  
  function draw_plots() {
    draw_plot('x', 0, 100, 200, 100, 170, 95);
    draw_plot('y', 100, 0, 100, 200, 105, 10);
  }
  
  function draw_eq(a,b,c) {
    draw_best_line(-1000, f(a,b,c,-1000), 1000, f(a,b,c,1000));
  }
  
  function draw_plot(name, mtX, mtY, ltX, ltY, nameX, nameY) {
    ctx.beginPath();
    ctx.moveTo(mtX, mtY);
    ctx.lineTo(ltX, ltY);
    ctx.strokeStyle = '#00FF00';
    ctx.stroke();
    ctx.fillText(name, nameX, nameY);
    ctx.fillText(200, nameX+10, nameY);
    ctx.strokeStyle = '#000000';
  }
  
  function draw_dumb_line(mtX, mtY, ltX, ltY) {
    ctx.beginPath();
    ctx.moveTo(mtX, mtY);
    ctx.lineTo(ltX, ltY);
    ctx.strokeStyle = '#000000';
    ctx.stroke();
    ctx.strokeStyle = '#000000';
  }
  
//   inverted
  function draw_better_line(mtX, mtY, ltX, ltY) {
    draw_dumb_line(mtX, 200-mtY, ltX, 200-ltY)
  }
  
//   centered
  function draw_best_line(mtX, mtY, ltX, ltY) {
    draw_better_line(100+mtX, mtY+100, 100+ltX, ltY+100)
  }
  
  function tX(x) {
    return 100+x;
  }
  
  function tY(y) {
    return 200-y-100;
  }
  
  function draw_point(x, y, size) {
    ctx.fillRect(tX(x-size/2),tY(y+size/2),size,size);
  }

  function drawLineFromForm(form_part_name) {
    oForm = document.getElementById("form")
    a = oForm.elements[form_part_name+"[a]"].value;
    b = oForm.elements[form_part_name+"[b]"].value;
    c = oForm.elements[form_part_name+"[c]"].value;
    draw_eq(a,b,c);
  }
  
  function drawPointFromForm(form_part_name) {
    oForm = document.getElementById("form")
    x = parseInt(oForm.elements[form_part_name+"[x]"].value);
    y = parseInt(oForm.elements[form_part_name+"[y]"].value);
    draw_point(x,y,5);
  }