<!DOCTYPE HTML>
<html> 
  <head>
    <?php include 'for_zad1/scripts.html'; ?>
  </head>
  <body>
    <?php 
      require_once('for_zad1/init.php');
      include 'shared_views/menu.html';
      include 'for_zad1/form_view.php';
    ?>
    <canvas id="myCanvas" width="200" height="200"></canvas>
    <?php
      if($_POST) {
        calculateFromPost();
      } else {
        pr('Submit form for results');
      }
    ?>

  </body>
</html>
