<table>
  <?php
    echo '<th colspan="2" align="center">PROSTE:</th>';
    create_result_row('ROWNOLEGLOSC:', $line_1->is_parallel($line_2));
    create_result_row('PROSTOPADLOSC:', $line_1->is_perpendicular($line_1));
    echo '<th colspan="2" align="center">PUNKT:</th>';
    create_result_row('PUNKT NA PROSTEJ 1:', GeometryHelper::is_on_line($point, $line_1));
    create_result_row('ODLEGLOSC OD PROSTEJ 1:', GeometryHelper::distance_from_line($point, $line_1));
    create_result_row('PUNKT NA PROSTEJ 2:', GeometryHelper::is_on_line($point, $line_2));
    create_result_row('ODLEGLOSC OD PROSTEJ 2:', GeometryHelper::distance_from_line($point, $line_2));
  ?>
</table>