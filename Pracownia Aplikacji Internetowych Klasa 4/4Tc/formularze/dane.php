<?php

session_start();

/*$imie = $_POST['imie'];

$nazwisko = $_POST['nazwisko'];

if(empty($imie) || empty($nazwisko) ){
	header('Location: formularz.php');
	$_SESSION['blad'] = '<br><br><span style="color: red">PODAJ DANE</span>';
	}
else echo "Imie: <span style=\"color:green\">$imie</span>, Nazwisko: <span 			 
	style=\"color:pink\">$nazwisko</span>";*/

if(isset($_POST['kolor'])){
	echo "zaznaczyłeś wartość: {$_POST['kolor']}";
}else{
	//echo "nic nie zaznaczyłes";
	header('Location: formularz.php');
}

?>