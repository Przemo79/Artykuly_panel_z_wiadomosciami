<!doctype html>
<html lang="pl">
<head>
	<title>Start</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styl.css">
</head>
<body style="background-color: #87a9bc; padding-top: 100px">
<div class="srodek">

<?php
session_start();

if (isset($_SESSION["czyZalogowany"])) {
	echo "<br><div class='napis'>Jesteś zalogowany.</div><br><br><br><br><br><br>
			<div>
				<form action='wylogowanie.php' method='post'>
					<input class='button1' type='submit' value='WYLOGUJ SIĘ'>
				</form>
				<form action='panel.php' method='post'>
					<input class='button2' type='submit' value='PRZEJDŹ DO PANELU'>
				</form>
			</div>
		  </div>";
}
else {
	echo "<br><div class='napis'>Najpierw musisz się zalogować.</div><br><br><br><br>
			<div class='napis'>
				<form action='logowanie_wlasciwe.php' method='post'><br>
					<input class='button3' type='submit' value='ZALOGUJ SIĘ'>
				</form>
			</div>
		  </div>";
}

?>

</div>
</body>
</html>