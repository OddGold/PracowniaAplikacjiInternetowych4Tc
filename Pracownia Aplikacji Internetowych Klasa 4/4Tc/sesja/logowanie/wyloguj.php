<?php


  session_start();

  if(!isset($_SESSION['zalogowany'])){
    header('Location: logowanie.php');
  }
  else{
  session_destroy();
  session_start();
  $_SESSION['komunikat'] = "<span style = \"color: green;\">WYLOGOWANO.</span>";
  header('Location: logowanie.php');
  }
?>