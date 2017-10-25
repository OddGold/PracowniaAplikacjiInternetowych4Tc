<?php

// operatory 

	// +, -, /, %, *, **

	$potegowanie = 2**10;

	echo "$potegowanie <br>";
	
	$modulo = 11%3;

	echo "$modulo <br>";

// operatory bitowe

	/*and &,  or |, not ~, xor ^,
	przesunięcie bitowe w lewo <<, przesunięcie bitowe w prawo >>*/

		$dziesiec = 0b1010; //10
		$nowa = $dziesiec << 1; //20
		$nowa = $dziesiec << 2; //40

		echo "$nowa<br>";


		$x = 0b111;
		//$x = $x >> 1;
		$x >>=  1;
		echo $x;

//operatory logiczne

	//and, or, xor, !, &&, ||

	//SŁOWNIE MAJĄ MNIEJSZY PRYJORYTET
		

//zadanie 1 

	$x = 1;
	$y = 2;
	$z = 3;
	$a = 4;

	if($x and $y && $z);
		echo '<br> xD <br>';
			

// czy w sklepie kupisz sok

	$otwarty = 'otwarty';
	$pieniadze = 10;
	$sok = true;

	if($otwarty == 'otwarty' and $pieniadze>5 && $sok){
		echo "kupiles sok<br>";
	}else{
		echo "nie kupiles<br>";
	}

// zad 2. chcemy kupic sok lub banany
// sprawdzic i wyswietlic co kupil uzytkownik w sklepie 
	$otwarty = 'otwarty';
	$pieniadze = 10;
	$sok = false;
	$banany = true;

	if($otwarty == 'otwarty' and $pieniadze>5 && ($sok && $banany)){
		echo "kupiles sok i banany<br>";
	}else if($otwarty == 'otwarty' and $pieniadze>5 && $sok){
		echo "kupiles sok";
	}else if($otwarty == 'otwarty' and $pieniadze>5 && $banany){
		echo "kupiles banany<br>";
	}else{
		echo "nie kupiles nic geju<br>";
	}

//***********************************************************************

	$a = 1;
	$b='1';

	/*if($a==$b) echo "\$a i \$b jest równe";
	else echo "\$a i \$b są różne";*/ //nie patrzy na typ danych
	if($a===$b) echo "\$a i \$b jest równe";
	else echo "\$a i \$b są różne"; //patrzy na typ danych

//***************************************************************************

//zadanie 3

	$x=2;
	echo $x; //2
	echo ++$x; //pre-incrementation 3
	$y= $x++; // x = 4
	echo $y; //3
	$y = ++$x;
	echo $y;//5
	echo ++$y;//6

//kontrola typu zmiennych 

	$test = 'szkola';
	$x = 10;
	$a = 20.5;
	$y = true;
	$z = null;
	$w;

	echo gettype($test); //string
	echo gettype($x); //int
	echo gettype($a); //double
	echo gettype($y); //boolean
	echo gettype($z); //NULL
	echo gettype($w); //undefined variable: NULL
	echo "<br>";

	echo is_string($test); //1
	echo is_string($x); //nic

	echo is_bool($y); //1
	echo is_bool($x); //nic

	echo is_double($a); //1
	echo is_float($a); //1

	echo is_int($x); //1
	echo is_int($y); //nic

	echo is_null($z); //1
	echo is_null($w); //1 ale notice wyswietla

//**********************************************************************

//Zmienne superglobalne	
	
 //$_GET, $_POST, $_FILES, $_COOKIE, $_SESSION
	echo "<br>",$_SERVER['SERVER_PORT']; // 80
	echo "<br>",$_SERVER['SCRIPT_NAME']; // /4Tc/zmienne/operacjenazmiennych.php
	echo "<br>",$_SERVER['SERVER_PROTOCOL']; // HTTP/1.1
	echo "<br>",$_SERVER['DOCUMENT_ROOT'],"<br>"; // C:/xampp/htdocs

//****************************************************************************

//STAŁE
//nazwy z duzych liter!!!

	define('NAZWISKO','Nowak'); 

	echo NAZWISKO;
	//NAZWISKO = "kowalski"; //NIE WOLNO!

	define('imie','Janusz');
	echo imie;

	define('WIEK',18,true); //3 parametr mowi o sprawdzaniu napisania stałej
	echo WIEK;

	echo wiek;

	define('PI',3.14159265359);
	echo PI;

	echo "<br>";

//************************************************************************************

//stałe predefiniowane

	echo PHP_VERSION; //7.1.9
	
	echo __LINE__; //173
	echo __FILE__; //C:\xampp\htdocs\4Tc\zmienne\operacjeNaZmiennych.php
	echo __DIR__; //C:\xampp\htdocs\4Tc\zmienne
	echo "<br><br>";
//***************************************************************************************

//operator konwertowanie (rzutowania) typów;

	$x = 5.9;
	$y = 10.9;
	$z = 2;
	$j = -1;
	$c = 100;
	$tekst = 'wakacje';

	$x = (int)$x;
	echo $x; //5

	$y = (float)$y;
	echo $y;

	echo gettype($z);
	$z = (float)$z;
	echo $z;
	echo gettype($z);

	$j = (bool)$j;
	echo $j;

	echo $c;
	$c = (unset)$c;
	echo gettype($c);

	$tekst = (int)$tekst;
	echo $tekst; //0

	//(string), (array), (object)


?>