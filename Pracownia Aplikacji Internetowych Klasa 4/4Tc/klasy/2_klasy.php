<?php 

  require_once('./class/samochod.php');

  $auto1 = new Samochod("Polska");

  $auto1->marka = "Ferrari";
  $auto1->model = "F430";

  echo $auto1->wyswietl();
  echo $auto1->wyswietlForeach();

?>