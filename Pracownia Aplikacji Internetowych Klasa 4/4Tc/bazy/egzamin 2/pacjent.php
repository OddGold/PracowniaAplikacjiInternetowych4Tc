<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>

<body>
<div id="baner"><h1>PRAKTYKA LEKARZA RODZINNEGO</h1></div>
<div id="panelLewy"><h3>LISTA PACJENTÓW</h3>

    <?php
    
        $polaczenie = @new mysqli('localhost','root','','przychodniatc');
    
        if(!$polaczenie->connect_error){
             //echo "Poprawne ".$polaczenie->connect_errno;
            
            $zapytanie = "SELECT `id`,`imie`,`nazwisko` FROM pacjenci;";
            
            if($rezultat = $polaczenie->query($zapytanie)){
                while($wiersz = $rezultat->fetch_assoc()){
                echo<<<WIERSZ
                    $wiersz[id]         
                    $wiersz[imie]         
                    $wiersz[nazwisko]<br>       
WIERSZ;
                }     
            }else{
                echo "błąd w zapytaniu";
            }
            
        }else{
           //echo "Błąd ".$polaczenie->connect_error;
           echo "Błąd ".$polaczenie->connect_errno;
            //2002 błąd z serverem 
            //1044 błąd z użytkownikiem
            //1045 błąd z hasłem
            //1049 błąd z bazą
        }
        echo "<br>";
    ?>
    <br><br>
    <form action="pacjent.php">
    
        PODAJ ID:<br><input type='number' name="id">
        <input type='submit' name="przycisk" value="Pokaż dane">
    
    </form>
</div>
<div id="panelPrawy"><h2>INFORMACJE O PACJENCIE</h2>
<?php
    
    if(isset($_GET['przycisk'])){
        
        $id = $_GET['id'];
        //echo $id;
        $sql = "SELECT `imie`,`nazwisko`,`choroby_przewlekle`,`uczulenia` from pacjenci WHERE id = '$id';";
        
        if($rezultat = $polaczenie->query($sql)){
            
            $wiersz = $rezultat->fetch_assoc();
            
            echo<<<WIERSZ
                <p>Imie i nazwisko: $wiersz[imie] $wiersz[nazwisko] </p>
                <p>Choroby przewlekłe: $wiersz[choroby_przewlekle]</p>
                <p>Uczulenia: $wiersz[uczulenia]</p>
WIERSZ;
            
        }else{
            echo "Błąd w zapytaniu";
        }
        
    }
       $polaczenie->close();
?>      
</div>
<div id="stopka"></div>
</body>

</html>