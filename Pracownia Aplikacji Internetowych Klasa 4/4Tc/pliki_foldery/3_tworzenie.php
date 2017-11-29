<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pliki i foldery - tworzenie</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <form>
  <p>
    Dodaj folder<input type="text" name="folder" />
    <input type="submit" name="przycisk" value="Dodaj folder" />
  </p>
  
  </form>
  
  <?php
  $dir = "./test";
  
    if(isset($_GET['przycisk'])&& !empty($_GET['folder'])){
      $folder = $_GET['folder'];
      if(!file_exists($dir."/".$folder)){
        
          mkdir($dir."/".$folder);
        
      }else{
        echo "<script>alert('Folder o nazwie $folder juz istnieje')</script>";
      }
    }
  
    if(isset($_GET['usunK'])){
      $usun = $_GET['usunK'];
      if(file_exists($dir."/".$usun)){
        rmdir($dir."/".$usun);
      }}
    if(isset($_GET['usunP'])){
      $usun = $_GET['usunP'];
      if(file_exists($dir."/".$usun)){
        unlink($dir."/".$usun);
      }
    }
  
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
