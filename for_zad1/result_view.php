<table>
  <?php
    echo '<th colspan="2" align="center">LINES:</th>';
    create_result_row('PERPENDICULAR:', $line_1->is_parallel($line_2));
    create_result_row('PARALLEL:', $line_1->is_perpendicular($line_2));
    echo '<th colspan="2" align="center">POINT:</th>';
    create_result_row('POINT ON LINE 1:', GeometryHelper::is_on_line($point, $line_1));
    create_result_row('DISTANCE TO LINE 1:', GeometryHelper::distance_from_line($point, $line_1));
    create_result_row('POINT ON LINE 2:', GeometryHelper::is_on_line($point, $line_2));
    create_result_row('DISTANCE TO LINE 2:', GeometryHelper::distance_from_line($point, $line_2));
  ?>
</table>