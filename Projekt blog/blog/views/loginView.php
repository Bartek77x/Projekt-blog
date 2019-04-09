<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="m" value="index">
	<input type="hidden" name="numerStrony" value="<?php echo $_GET['numerStrony'] ?>">
	<input type="hidden" name="wpisow" value="<?php echo $_GET['wpisow'] ?>">
    login <input name="login" type="text">
    haslo <input name="haslo" type="password">
    <input type="submit" value="Zaloguj">
</form>
