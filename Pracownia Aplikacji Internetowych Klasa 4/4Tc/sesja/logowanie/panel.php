<?php
  session_start();
  if(!isset($_SESSION['zalogowany'])){
    header("Location: logowanie.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Panel użytkownika</title>
</head>
<body>
  <?php
  if(isset($_SESSION['login'])){
  echo "Witaj {$_SESSION['login']}, zostałeś zalogowany.";
  echo<<<TEKST
  <br><br>
  <a href='wyloguj.php'>Wyloguj się</a>
TEKST;
  }
  else{
    echo "blad";
  }
  ?>
</body>
</html>