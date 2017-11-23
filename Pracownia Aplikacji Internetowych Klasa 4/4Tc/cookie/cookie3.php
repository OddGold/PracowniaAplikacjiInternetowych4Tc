<?php

	$dni = 30;

	if(!isset($_COOKIE['licznik'])){
		$licznik = 1;
	}else{
		$licznik = intval($_COOKIE['licznik']);
		$licznik++;
	}

	setcookie('licznik', $licznik, time()+60*60*24*$dni)

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Cookie</title>
</head>
<body>
	<?php
	
	if($licznik == 1){
		echo "Jesteś tu pierwszy raz w ciągu $dni dni";
	}else{
		echo "Liczba odwiedzin w ciągu ostatnich $dni dni:  <span style=\"color: red\">$licznik</span> razy";
	}
	
	?>
	
	<form action="./cookie3.php">
			<input type="submit" name="usun" value="Usuń ciasteczko">
	</form>
	
	<?php
	if(isset($_GET['usun'])){
		setcookie('licznik',false);
		header("Location: ./cookie3.php");
	}
	?>
</body>	
</html>