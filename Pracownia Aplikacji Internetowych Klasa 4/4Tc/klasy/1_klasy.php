<?php

    class Uzytkownik{
        public $imie, $nazwisko;
        
        public function ustawImie($wartosc){ //metoda o nazwie ustawImie
            $this->imie = $wartosc; //PO $this NIE DAJEMY DOLARA!!
        }
        
        public function pobierzImie(){
            return $this->imie;
        }
        
        public function ustawNazwisko($wartosc){ //metoda o nazwie ustawNazwisko
            $this->nazwisko = $wartosc; //PO $this NIE DAJEMY DOLARA!!
        }
        
        public function pobierzNazwisko(){
            return $this->nazwisko;
        }
            
    }

    $uczen1 = new Uzytkownik();

    $uczen2 = new Uzytkownik();

    $uczen1->imie = "Janusz";
    $uczen1->nazwisko = "Nowak";
    
    $uczen2->ustawImie("Anna");
    $uczen2->ustawNazwisko("Kowalska");

    echo "Imie ucznia 1: $uczen1->imie <br> Nazwisko ucznia 1: $uczen1->nazwisko <br><br>";
    echo "Imie ucznia 2: {$uczen2->pobierzImie()} <br> Nazwisko ucznia 2: {$uczen2->pobierzNazwisko()} <br><br>";

    

?>