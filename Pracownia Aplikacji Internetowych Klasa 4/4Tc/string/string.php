<?php

	$tekst = <<<TEKST
	ZSK - Zespół
	Szkół
	Komunikacji
TEKST;

	echo "Przed użyciem funkcji nl2br: <br> $tekst";

	echo "Po uzyciu funkcji nl2br: <br>";
	echo nl2br($tekst);
	echo "<br>";

	// zamiana na małe litery

	echo strtolower($tekst);

	//zamiana na duze litery

	echo strtoupper($tekst);
	echo "<br>";
	
	//napisz funkcję podnoszącą do dużych liter

	//zamiana pierwszej litery na duzą

	$tekst = "rAZ DWa tRzy";
	$pierwsza = ucfirst($tekst);
	echo $pierwsza;
	echo "<br>";

	//zamiana pierwszych liter na duże

	$tekst = "rAZ dWA tRzy";
	echo ucwords($tekst);
	echo "<br>";

	$lorem ='Cupidatat multos duis tempor lorem, arbitror illum irure aliquip nulla, amet o e 
		minim laborum iis sunt fidelissimae probant esse arbitror, e ita fugiat sunt 
		sunt, pariatur illum eram officia esse et eu iis tractavissent, quo mentitum 
		eruditionem. Quae do aut aute possumus e o cernantur distinguantur, pariatur 
		malis anim quibusdam anim, fugiat fidelissimae mentitum esse probant sed probant 
		lorem nostrud id ullamco illum non consequat familiaritatem, quorum si id fugiat 
		doctrina, irure do de varias commodo. Varias eiusmod tractavissent. Quem o 
		fabulas nam minim, de malis commodo tractavissent, ubi summis probant se ubi ubi 
		coniunctione e nam ubi praetermissum de aliqua laboris hic litteris ita in 
		fugiat praetermissum aut aut dolor singulis imitarentur. Ea velit laborum 
		tractavissent qui anim doctrina do aute sint. Id esse arbitrantur, nam culpa 
		offendit. Vidisse aute esse quo culpa est dolor fabulas de comprehenderit. 
		Cillum relinqueret proident veniam senserit, iudicem quae tempor.';
	
	$kolumna = wordwrap($lorem, 30, "<br>");
	echo $kolumna;
	echo "<br>";

	// usuwanie białych znaków

	$auto = "  audi ";
	$auto1 = "audi";

	echo count($auto);//1
	echo strlen($auto);//7
	echo strlen($auto1);//4

	echo strlen(ltrim($auto));//5
	echo strlen(rtrim($auto));//6
	echo strlen(trim($auto));//4


	echo "<br>";
//przeszukiwanie ciągów

	$adres = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
	
	$szukaj = strstr($adres, "tel"); //tel. (61) 445-44-58

	echo $szukaj;
	
	echo "<br>";

	$szukaj = strstr($adres, "tel", true); //Poznań, ul. Fredry 13,

	echo $szukaj;

	echo "<br>";

	$szukaj = stristr($adres, "Tel");// bram wyniku

	echo $szukaj;// tel. (61) 445-44-58

	$ciag1 = "a";
	$ciag2 = "aa";

	echo "<br>";
	echo strcmp($ciag1,$ciag2);//-1

	echo "<br>";
	echo strcmp("zz","zz"); //0

	echo "<br>";
	echo strcmp("zzzq","zzzz"); //-1
	echo "<br>";
	echo strcmp("zzz","zz"); //1
	echo "<br>";

//*************************************************************************************8

	$tekst1 = "abcdabcdabcd";
	$tekst2 = "abz";

	if(is_nan(strpos($tekst1,$tekst2))){
		echo "Ciąg $tekst2 nie został znaleziony w ciągu $tekst1"; 
	}else{
		echo "Ciąg $tekst2 został znaleziony w ciągu $tekst1";
	}

	echo strpos($tekst2,$tekst1);

?>