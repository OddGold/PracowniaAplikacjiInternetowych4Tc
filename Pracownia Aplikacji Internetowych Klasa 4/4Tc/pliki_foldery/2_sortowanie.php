<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pliki i foldery - sortowanie</title>
</head>
<body>
  
  <?php
  
    $dir = "./test";
  if(!$folder = opendir($dir)){
    exit('Coś poszło nie tak');
  }else{
    $sort = 0;
    if(isset($_GET['sort'])){
      $sort = $_GET['sort'];
    }
    $dane = scandir($dir, $sort);
    echo "<ul>";
    
      foreach($dane as $klucz => $wartosc){
        if($wartosc !='.' && $wartosc != '..')
        echo "<li>$wartosc</li>";
      }
      
    echo "</ul>";
    closedir($folder);
  }
  
  ?>
  
  <a href='2_sortowanie.php?sort=0'>Sortuj rosnąco</a><br>
  <a href='2_sortowanie.php?sort=1'>Sortuj malejąco</a>
  
</body>
</html>
