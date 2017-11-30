<?php
  session_start();

  if(isset($_SESSION['zalogowany'])){
    header("Location: panel.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Logowanie</title>
</head>
<body>
  <h2>Logowanie</h2>
  <form method="post" action="zaloguj.php">
  
    Login: <input type="text" name="login">
    Hasło: <input type="password" name="pass">
    <input type="submit">
  
  </form>
  <?php
    if(isset($_SESSION['komunikat'])){
      echo $_SESSION['komunikat'];
      unset($_SESSION['komunikat']);
    }
  ?>
</body>
</html>