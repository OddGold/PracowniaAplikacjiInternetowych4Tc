<?php

	$liczba = 10;
	$_liczba = 15;
	$liczba2 = 69;
	$imie_ = "Janusz";
	$Imie_ = "Maciej";

	$Imię = "Ryszard";
	$wartość = 12;

	$🚄 = "rysiu XD";
	echo $🚄;
	
//typy danych

//typy skalarne (prosty)

//typ boolean

$prawda = true;
$fałsz = false;
	
//typ integer
//
//$calkowita = 200;
//echo "<br>zmienna: ", $calkowita;
/*

$osemkowa = 021; // 2*8^1+1*8^0 = 17
echo "<br>zmienna: ", $osemkowa;
*/

$szesnastkowa = 0x21; //33
//echo "<br>zmienna: ", $szesnastkowa;// wolniej niz \/

//echo "<br>zmienna: $szesnastkowa";

$binarna = 0b111;

//echo "<br>zmienna: $binarna";//7

//typ float

$zmienna = 5.7;

//typ string

$cyfra = 1;

echo "tekst: $cyfra<br>";
echo 'tekst: $cyfra<br>';

//składnie heredoc

$wiek = 20;

	$imie = <<<ETYKIETA
	Janusz ma $wiek lat<br>
	Mieszka w Poznaniu<br>
	Nazywa się Kowal<br>ETYKIETA<br>
	XDD dziala dalej xd <br><br>
ETYKIETA;

echo $imie;

//nowdoc
	$x = 'Janusz';
	$tekst2 = <<<TEKST
	Anna $x <br>
TEKST;
	$tekst3 = <<<'TEKST'
	Anna $x <br>
TEKST;

echo $tekst2;
echo $tekst3;

 	$miejscowosc = "poznan";
	echo <<<'TEST'
	<h1>Miejsce urodzenia: </h1>
	$miejscowosc
TEST;

// typ złożony

	//typ array
	//typ object 
	
//typ specjalny 
	
	//typ resource
	//typ null

	$inna = null;
	$inna1 = NULL;
	
	

?>
