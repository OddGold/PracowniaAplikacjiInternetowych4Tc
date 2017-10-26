<?php

	// tablice indeksowane

	$kolory = array("biały", "zielony", 'czerwony');

	function wypisz($tablica){
	echo "Początkowa zawartość tablicy: <br>";
	for($i = 0; $i<count($tablica);$i++){
		$element = $i+1;
		echo "Element $element: $tablica[$i]<br>";
	}
	}
	
	wypisz($kolory);
	

	$kolory[0] = 'orange';
	$kolory[1] = 'aqua';
	$kolory[2] = 'Czarek';

	wypisz($kolory);

//****************************************************************************************
	
	//tablice asocjacyjne

	$dane = array(
		"imie" =>"Maciej",
		"nazwisko" =>"Trybuś",
		"wiek" =>19,
		"narodowosc" =>"polska"
	);
	
	echo 'zawatrość tablicy o nazwie $dane: <br>';
	
	echo <<<TABLICA
	Imie: {$dane['imie']}<br>
	Nazwisko: $dane[nazwisko]<br>
	Wiek: $dane[wiek]<br>
	Narodowosc: $dane[narodowosc]<br>
TABLICA;

echo "<br>";

//****************************************************************************************
	//foreach
	
	/*foreach($dane as $wartosc){
		echo "Wartosc: $wartosc<br>";
	}*/

	foreach($dane as $klucz => $wartosc){
		echo "Element[$klucz] - $wartosc<br>";
	}
	
	function wypiszAsoc($tablica){
	foreach($tablica as $klucz => $wartosc){
		echo "$klucz - $wartosc<br>";
	}
		}

//*************************************************************************************

	//tablice wielowymiarowe

	echo "<br>";

	$uczen = array(
		array("Julia","Nowak",20),
		array("Anna","Kowal",19),
		array("Piotr","Kowalski",25)
	);

	for($i = 0;$i<count($uczen);$i++){
		for($j = 0;$j<count($uczen[$i]);$j++){
			echo "Element $j tablicy $i: {$uczen[$i][$j]}<br>";
		}
		echo "<br>";
	}

	echo "<br><br>";

	foreach($uczen as $klucz => $tablica){
		foreach($tablica as $klucz2 =>$wartosc){
			echo $uczen[$klucz][$klucz2]." ";
		}
		echo "<br>";
	}

	


	//funkcja wyswietlajaca tablice dwu wymiarową

	function wyswietlDwuWymiar($tabAsoc){
		foreach($tabAsoc as $klucz => $tablica){
		foreach($tablica as $klucz2 =>$wartosc){
			echo $tabAsoc[$klucz][$klucz2]." ";
		}
		echo "<br>";
	}
	}

	echo "<br>";

	wyswietlDwuWymiar($uczen);

	//utworz tablice trójwymiarową i napisz dla niej funkcje wyswietlającą zawartość wykorzystaj funkcjęfor each


	$cyfry = array(
		array(1,2,3,4),
		array(5,6,7),
		array(8),
		array(9,10)
	);
	
	wyswietlDwuWymiar($cyfry);	
		
//sortowanie

	$🎮 = array(10,1,5,75,-4,100);
	
	function wypisz1($tablica){
		foreach($tablica as $x)
			echo $x." ";
		echo "<br>";
	}

	wypisz1($🎮);
		
	//rosnąco

	sort($🎮);
	wypisz1($🎮);

	//malej

	rsort($🎮);
	wypisz1($🎮);

//********************************************************************************************
	echo "<br>";

	$tab2 = array("Julia","Anna", "Zenon", "Alicja");
	wypisz1($tab2);
	
	//rosnąco

	sort($tab2);
	wypisz1($tab2);

	//malejąco

	rsort($tab2);
	wypisz1($tab2);

//*********************************************

	$tab3 = array("julia","Anna", "Zenon", "Alicja");
	wypisz1($tab3);
	
	//rosnąco

	sort($tab3);
	wypisz1($tab3);

	//malejąco

	rsort($tab3);
	wypisz1($tab3);

	foreach($tab3 as $klucz => $x){
		$x = strtolower($x);
		$tab3[$klucz] = $x;
	}
	
	//rosnąco

	sort($tab3);
	wypisz1($tab3);


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++=

//sortowanie tablicy asocjacyjnej

	$tabAsoc = array(
		"imie" => "artur",
		"pseudonim" => "3rtur",
		"wiek" => 19,
		"nazwisko" => "jackowiak"
	);

	wypiszAsoc($tabAsoc);


	asort($tabAsoc);

	wypiszAsoc($tabAsoc);

	echo gettype($tabAsoc['pseudonim']);
	echo gettype($tabAsoc['wiek']);

	arsort($tabAsoc);
	wypiszAsoc($tabAsoc);


	//sortowanie według klucza

	ksort($tabAsoc);
	wypiszAsoc($tabAsoc);

	//wyświetlanie danych z tablicy

	var_dump($tab3);
	echo "<br>";
	var_dump($tabAsoc);

	echo "<br><br>";

	print_r($tab3);
	echo "<br>";
	print_r($tabAsoc);

	echo '<pre>';
		print_r($tab3);
	echo '</pre>';
	









?>