<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pliki i foldery - otwieranie plików</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <?php
  $gibi = 1024**3;
  echo "Wolne miejsce na partycji: ";//bajty
  $wolneMiejsce = round(disk_free_space("/") / $gibi,2);
  echo $wolneMiejsce." GiB"."<br>";
  
  echo "<br>Wielkość partycji: ";
  $partycja = round(disk_total_space("/") / $gibi, 2);
  echo $partycja." GiB <br>";
  
    $plik = "matura.txt";
  
    if(isset($_POST['przycisk'])){
      $nowyTekst = $_POST['area'];
      //echo $nowyTekst;
      if($zapis = fopen("./test/$plik",'wb')){
        if(fwrite($zapis,$nowyTekst)===false){
         echo "błąd zapisu";
        }else{
          echo "Plik zapisany";
        }
        fclose($zapis);
      }else{
        echo "Nie można otworzyć pliku $plik";
      }
    }
  
    if($fd = fopen("./test/$plik",'rb')){
      $rozmiar = filesize("./test/$plik");
      $tekst = fread($fd, $rozmiar);
      fclose($fd);
    }else{
      echo "Nie mozna otworzyć pliku $plik";
    }
  
  //echo $rozmiar;
  //echo $tekst;
  
  ?>
  <br>
  <form method="post">
  <textarea name="area" rows="15" cols="30">
<?php
  echo $tekst;  
?>
  </textarea><br>
    <input type="submit" name="przycisk" value = "zapisz">
  </form>
</body>
</html>