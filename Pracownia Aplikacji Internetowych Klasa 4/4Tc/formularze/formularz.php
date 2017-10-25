<?php //session_start(); 
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Formularz</title>
</head>
<body>
	<!--<form method="post" action="dane.php">
		Imie: <input type="text" name="imie">
		Nazwisko: <input type="text" name="nazwisko">
		<input type="submit">
		</form>
		<?php
		/*if(isset($_SESSION["blad"])){
			echo $_SESSION['blad'];
			unset($_SESSION['blad']);
			}*/
		?>	
		-->
		<!--<form method="post" action="dane.php">
		<input type="radio" name="kolor" value="czerwony">czerwony<br>
		<input type="radio" name="kolor" value="zielony">zielony<br>
		<input type="radio" name="kolor" value="bialy">biały<br>
		<input type="submit">
		</form>	-->
		<!--<form method="post">
		<input type="radio" name="kolor" value="czerwony">czerwony<br>
		<input type="radio" name="kolor" value="zielony">zielony<br>
		<input type="radio" name="kolor" value="bialy">biały<br>
		<input type="submit" name="przycisk">
		</form>	-->
	<form method="post">
		Login: <input type="text" name="login"><br>
		Hasło: <input type="password" name="haslo"><br>
		<input type="submit" name="button">
		</form><br>
        
	<?php
	
//		if(isset($_POST['przycisk'])){
//		if(isset($_POST['kolor'])){
//		$kolor = $_POST['kolor'];
//			echo "Wybrałeś kolor: $kolor";
//		}else{
//			echo "Nie zaznaczyłes radio";
//		}
//		}
	
	// sprawdz czy login ma wartosc janusz a haslo ma wartosc okoń (tutaj xD)
    
        if(isset($_POST['button'])){
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            if($login=='Janusz' && $haslo == 'okoń'){
                echo '<span style="color: green">Poprawne dane!<span>';
            }else{
                echo '<span style="color: red">Błędne dane!<span>';
            }
        }
	?>
	
</body>
</html>