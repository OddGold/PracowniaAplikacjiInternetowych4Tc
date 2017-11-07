
<?php

//data 

    echo date("Y-m-d"),"<br>"; //2017-11-02
    echo date("Y-M-D"),"<br>"; //2017-Nov-Thu
    echo date("Y-F-D"),"<br>"; //2017-November-Thu
    

//czas

    echo date("g:i:s"),"<br>"; //8:30:39 g - 12 godzinny format
    echo date("G:i:s"),"<br>"; //8:30:39 G - 24 godzinny format
    echo date("h:i:s"),"<br>"; //8:30:39 h - 12 godzinny format z zerem na poczatku
    echo date("H:i:s"),"<br>"; //8:30:39 H - 24 godzinny format z zerem na poczatku

//dzień tygodnia

    echo date("w"),"<br>"; //4 w - dzien tygodnia 0-6 ---- 0 to niedziela

    $dzienTygodnia = date("w");

    switch($dzienTygodnia){
        case 0:
            $dzienTygodnia = "Niedziela";
            break;
        case 1:
            $dzienTygodnia = "Poniedziałek";
            break;
        case 2:
            $dzienTygodnia = "Wtorek";
            break;
        case 3:
            $dzienTygodnia = "Środa";
            break;
        case 4:
            $dzienTygodnia = "Czwartek";
            break;
        case 5:
            $dzienTygodnia = "Piątek";
            break;
        case 6:
            $dzienTygodnia = "Sobota";
            break;
            
    }

    echo $dzienTygodnia,"<br>"; //Czwartek

    echo date("W"),"<br>"; //44 W - tydzien roku

    echo date("L"),"<br>";//L mowi czy przestepny czy nie

    echo date("z") + 1,"<br>"; //306 z - dzien roku --- liczy od 0 dlatego + 1
    
//****************************************************************************************

//getdate

    $data = getdate();
    //echo $data; // TO TABLICA!!!
    
    foreach($data as $klucz => $x){
        echo "$klucz: $x <br>"; 
    }

    //2017-11-02

    $rok = $data['year']; //2017
    $miesiac = $data['mon']; //11
    $dzien = $data['mday']; //2

    if($dzien<10) $dzien = '0'.$dzien;

    echo <<<TEKST
    $rok-$miesiac-$dzien
TEKST;

//zad dom 
//Wyświetl na ekranie date i czas w nastepującym formacie: Data: 02 listopad 2017 r. | 08:54:11
// Rok 2017 ma: 365 dni
// ver. 2. dodaj dwa kalendarze w formularzu na stronie 
    $przestepnosc = date("L");
    $godzina = $data['hours'];
    $minuta = $data['minutes'];
    $sekundy = $data['seconds'];
    if($godzina<10) $godzina = "0".$godzina;
    if($minuta<10) $minuta = "0".$minuta;
    if($sekundy<10) $sekundy = "0".$sekundy;
    if($przestepnosc == 0) $dni = 365;
    else if($przestepnosc == 1) $dni = 366;
    $dataDokladna = "$rok-$miesiac-$dzien | $godzina:$minuta:$sekundy<br> Rok $rok ma: $dni<br>";
    echo "<br>---------------------------------------------------";
    echo "<br> ZADANIE DOMOWE $dataDokladna<br>";
    echo "---------------------------------------------------<br>";

    echo <<<TEKST
        <input type="date" value="$rok-$miesiac-$dzien" disabled>
        <br>
TEKST;
//*********************************************************************************************

//znacznik czasu

    $r1 = 2017;
    $m1 = 11;
    $d1 = 2;

    $r2 = 1998;
    $m2 = 6;
    $d2 = 25;

    // godzina -> minuta -> sekunda -> miesiac -> dzien -> rok

    $czas1 = mktime(0, 0, 0, $m1, $d1, $r1);
    $czas2 = mktime(0, 0, 0, $m2, $d2, $r2);

    $czas = $czas1 - $czas2;
    
    echo $czas;

    $dni = floor($czas / 86400); // 60(sekundy)*60(minuty)*24(godziny) floor w dol zaokragla
    $lata = floor($dni/365.25); 

    echo "<br>Sekundy: $czas, dni: $dni, lata: $lata<br>";
    echo $czas1,"<br>"; //1509577200
    echo $czas2,"<br>"; //898725600

    //1 stycznia 1970

//*********************************************************************************************
// strtotime()

    $data = mktime();
    echo $data,"<br>";

    echo $dataDzisiejsza = strtotime("now");
    echo "<br>";
    echo $dataUrodzenia = strtotime("25 June 1998"); // 898725600
    echo "<br>";
    echo $zaTydzien = strtotime("next week"); //1509956535
    echo "<br>";
    echo $jutro = strtotime("tomorrow"); //1509663600
    echo "<br>";
    echo $DziesiecDniWstecz = strtotime("-10"); //1509650726
    echo "<br>";
    echo $przyszlosc = strtotime("+10 day 5 hours 20 minutes 2 seconds"); //1510494396
    echo "<br>";
    
//********************************************************************************************


    
    
    
    
    
?>
