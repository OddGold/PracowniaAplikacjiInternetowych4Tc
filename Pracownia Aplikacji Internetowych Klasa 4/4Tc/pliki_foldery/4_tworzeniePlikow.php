<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pliki i foldery - tworzenie plików</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <form>
  <p>
    Dodaj folder <input type="text" name="folder" />
    <input type="submit" name="przycisk" value="Dodaj folder" />
  </p>
  
  </form>
  <form>
  <p>
    Dodaj plik <input type="text" name="plik" />
    <input type="submit" name="przyciskP" value="Dodaj plik" />
  </p>
  
  </form>
  
  <?php
  $dir = "./test";
  
  // DODANIE FOLDERU
  
    if(isset($_GET['przycisk'])&& !empty($_GET['folder'])){
      $folder = $_GET['folder'];
      if(!file_exists($dir."/".$folder)){
        
          mkdir($dir."/".$folder);
        
      }else{
        echo "<script>alert('Folder o nazwie $folder juz istnieje')</script>";
      }
    }
  
  // DODANIE PLIKU
  
    if(isset($_GET['przyciskP'])&& !empty($_GET['plik'])){
      $plik = $_GET['plik'];
      if(!file_exists($dir."/".$plik)){
        
          if($fd = fopen($dir."/".$plik, 'w'));{
            if(file_exists($dir."/".$plik)){
              echo "<h3>Dodano plik o nazwie: $plik </h3>";
            }
            fclose($fd);
          }
        
      }else{
        echo "<h3>Plik o nazwie: $plik istnieje.<br>Podaj inną nazwe.</h3>";
      }
    }
  
  // USUWANIE KATALOGU
  
    if(isset($_GET['usunK'])){
      $usun = $_GET['usunK'];
      if(file_exists($dir."/".$usun)){
        rmdir($dir."/".$usun);
      }}
  
  // USUWANIE PLIKU
  
    if(isset($_GET['usunP'])){
      $usun = $_GET['usunP'];
      if(file_exists($dir."/".$usun)){
        unlink($dir."/".$usun);
      }
    }
  
  // WYPISYWANIE SORTOWANIE TEGO ITD
  
    if(!($folder = opendir($dir))){
      exit('Nie mozna otworzyc folderu');
    }else{
      $sortuj = 0;
      if(isset($_GET['sortuj'])){
        $sortuj=$_GET['sortuj'];
      }
      $dane = scandir($dir,$sortuj);
      
      $pliki = array();
      $katalogi = array();
      
      foreach($dane as $wartosc){
        if($wartosc!='.' && $wartosc!='..'){
          if(is_file($dir."/".$wartosc)){
            $pliki[] = $wartosc;
          }else{
            $katalogi[] = $wartosc;
          }
        }
      }
      
      closedir($folder);
      
      echo "<ul>";
      echo "<h2>Katalogi</h2>";
      foreach($katalogi as $wartosc){
          echo "<li>$wartosc <a href='3_tworzenie.php?usunK=$wartosc'>usuń</a></li>";
        }
      echo '<hr>'; 
      echo "<h2>Pliki</h2>";
      foreach($pliki as $wartosc){
          echo "<li>$wartosc <a href='3_tworzenie.php?usunP=$wartosc'>usuń</a></li>";
        }
      echo "</ul>";
    }
  
  ?>
  
  <a href="3_tworzenie.php?sortuj=0">Sortuj rosnąco</a>
  <a href="3_tworzenie.php?sortuj=1">Sortuj malejąco</a>
  
</body>
</html>
