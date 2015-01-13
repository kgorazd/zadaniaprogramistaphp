<form action="zadanie1.php" method="post" id="form">
Line 1:
<fieldset>
a: <input class="line" type="number" name="line[0][a]" value=<?php echo get_line_value(0, 'a', 1) ?> required><br>
b: <input class="line" type="number" name="line[0][b]" value=<?php echo get_line_value(0, 'b', 1) ?> required><br>
c: <input class="line" type="number" name="line[0][c]" value=<?php echo get_line_value(0, 'c', 1) ?> required><br>
</fieldset>
<br>
Line 2:
<fieldset>
a: <input class="line" type="number" name="line[1][a]" value=<?php echo get_line_value(1, 'a', 1) ?> required><br>
b: <input class="line" type="number" name="line[1][b]" value=<?php echo get_line_value(1, 'b', 2) ?> required><br>
c: <input class="line" type="number" name="line[1][c]" value=<?php echo get_line_value(1, 'c', 3) ?> required><br>
</fieldset>
<br>
Point:
<fieldset>
x: <input type="number" name="point[x]" value=<?php echo get_point_value('x', -2) ?> required><br>
y: <input type="number" name="point[y]" value=<?php echo get_point_value('y', 1) ?> required><br>
</fieldset>

  <input type="submit">
</form>