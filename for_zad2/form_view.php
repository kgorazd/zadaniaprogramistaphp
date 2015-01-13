<form action="zadanie2.php" method="post" id="form">
Cities: <input type="text" name="cities" value="<?php echo ($_POST)  ? $_POST['cities'] : 'Olsztyn, Rzeszow'; ?>" required><br>
<br>
<input type="submit">
</form>