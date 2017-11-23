<?php

  class Liczby{
    public $wartosc1=1;
    protected $wartosc2=2;
    private $wartosc3=3;
    
    public function wyswietl(){
      echo "Wartosc 1: $this->wartosc1 <br>";
      echo "Wartosc 2: $this->wartosc2 <br>";
      echo "Wartosc 3: $this->wartosc3 <br>";
    }
  }

  class Rzeczywiste extends Liczby{
    public function wyswietl(){
      echo "Wartosc 1: $this->wartosc1 <br>";
      echo "Wartosc 2: $this->wartosc2 <br>";
      echo "Wartosc 3: $this->wartosc3 <br>";
    }
  }

  $liczba1 = new Liczby();
  echo $liczba1->wartosc1;
  //echo $liczba1->wartosc2; error
  //echo $liczba1->wartosc3; error
  $liczba1->wyswietl();

  $liczba2 = new Rzeczywiste();
  echo $liczba2->wartosc1;
  //echo $liczba2->wartosc2; //error
  //echo $liczba2->wartosc3; //error
  $liczba2->wyswietl();

?>