<!DOCTYPE html>
<html>
<head>
	<title>Zajęcia 1</title>
	<meta charset="utf-8">
</head>
<body>
<?php	 
	echo '<h2 style="text-align:center">';
	echo 'XD';
	echo '</h2>';
	
	//include "../imie.php"; // dobrze xD
	//include "imie.php"; // przy błędzie warning ale kod sie wykonuje
	//@include "imie.php"; //@ wyłącza pokazywanie błędu
	
	//require "../imie.php";
	//require "../imie1.php";// po błędzie warning i fatal error oraz kod sie nie wykonuje po tym
	//@require "../imie1.php";// nie ma błędu ale nic wiecej sie nie wyswietla
	
	include "../skrypt/nazwisko.php";
	
	echo "<br>tekst po błędzie<br>";
?>
</body>
</html>