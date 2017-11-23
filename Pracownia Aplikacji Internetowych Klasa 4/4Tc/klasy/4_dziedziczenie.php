<?php

  require_once("./class/samochod.php");

  class Ciezarowy extends Samochod {
    public $ladownosc;
    
    public function wyswietl(){
      parent::wyswietl(); // :: oznacza odwolywanie sie do rodzica
      echo "Ładowność: ".$this->ladownosc;
    }
  }

  $tir1 = new Ciezarowy("WIELKA POLSKA");
  $tir2 = new Samochod("Wielki Pyssa");
  
  $tir1->ladownosc = 19000;
  $tir1->marka = "DAF";
  $tir1->model = "XF 95 480";

  echo $tir1->wyswietl();
  echo $tir1->wyswietlForeach();

  echo $tir2->ladownosc;
  $tir2->marka = "DAF";
  $tir2->model = "XF 95 480";
  echo $tir2->wyswietl();
?>