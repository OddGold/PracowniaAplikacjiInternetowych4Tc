<?php

  session_start();
    
  if(empty($_POST['login'])&&empty($_POST['pass'])){
    header("Location: logowanie.php");
  }

  $login = htmlentities($_POST['login'],ENT_QUOTES);
  $haslo = htmlentities($_POST['pass'],ENT_QUOTES);

  $connect = new mysqli('localhost','root','','uzytkownicy');
  if(!$connect->connect_errno){
  $sql = sprintf('SELECT login, haslo from uzytkownicy where login = "%s" AND haslo = "%s"',
         $connect->real_escape_string($login),
         $connect->real_escape_string($haslo));
    if($rezultat=$connect->query($sql)){
      if($rezultat->num_rows === 1){
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $connect->real_escape_string($login);
        
        header("Location: panel.php");
        
      }else{
        $_SESSION['komunikat'] = "<span style = \"color: red;\">BŁĘDNE DANE</span>";
        header("Location: logowanie.php");
      }
    }else{
      echo "Błąd w zapytaniu";
    }
  }else{
    echo "Błąd w połączeniu z bazą";
  }
?>