<?php

    //declare(strict_types = 1); // restrykcyjnosc typów

    function wartosc($a):string{
        if($a < 0):
            return "Ujemna";
        elseif($a>0):
            return "Dodatnia";
        else:
            return "Zero";
        endif;
    }


    
    
    $a=1;
    $wynik = wartosc($a);
    

    echo $wynik," ", gettype($wynik),"<br>";


    function dajWartosc():int{ //:int określa jaki typ danych zwraca funkcja
        // return 5.6; //declare(strict_types = 1); NIE DA SIE TAK PRZY TYM XD
        return 5;
    }
    
    echo dajWartosc(),"<br>"; //5
    
//zasieg zmiennych

    $x=10;

    function wyswietl(){
        //echo "Wartosc zmiennej \$x wynosi: $x";//błąd
        echo "Wartosc zmiennej \$x wynosi: ";
        echo $GLOBALS['x'],"<br>";
    }
    
    wyswietl();

//**************************************************************************************8

    $y = 5;
    function wyswietly(){
        global $y;
        echo "Wartosc zmiennej \$y wynosi: $y <br>";
    }
    wyswietly();

//**************************************************************************************8


    function suma(){
        $liczba = 10;
        echo "\$liczba wynosi: $liczba <br>";
        $liczba+=20;
    }

    suma();
    suma();
//**********************************************

//static

    function suma1(){
        static $liczba = 10; // static przypisuje raz przy pierwszym wywołaniu i ją zapamiętuje
        echo "\$liczba wynosi: $liczba <br>";
        $liczba+=20;
    }

    suma1();
    suma1();
    suma1();

//zad dom 
//użytkownik podaje z klawiatury ilosc pieniędzy jakie dostał za prace(w formularzu) wstaw sumy do tablicy stworz tablice asocjacyjną w której kluczami będą miesiące. Suma za pracę bedzie automatycznie wstawiana do tablicy w zaleznosci od miesiąca. wstaw również do tablicy potwierdzenie dotyczące daty, godziny, minut i sekund w jakiej użytkownik dostał pieniądze. Użytkownik może wybrać okres w jakim chce sprawdzic ile zarobił jak również średni zarobek z 3 ostatnich miesiecy oraz całego roku.





?>