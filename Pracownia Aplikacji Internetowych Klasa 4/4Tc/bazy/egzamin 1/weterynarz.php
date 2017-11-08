<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
</head>
<body>
    <div id="baner"><h1>GABINET WETERYNARYJNY</h1></div>
    <div id="panelLewy">
        <h2>PSY</h2>
        
        <?php
        //POŁĄCZENIE Z SERVEREM MYSQL
        
            if($polaczanie = @mysqli_connect('localhost','root','')) { //  @ - wycisza
               // echo "Połączenie prawidłowe<br>";
            }else{
                echo "Połącznie nieprawidłowe<br>";
            }
        
        //POŁĄCZENIE Z BAZĄ DANYCH
            
            if(mysqli_select_db($polaczanie,'weterynarztc')){
                //echo "Połączenie prawidłowe z bazą weterynarztc<br>";
            }else{
                echo "Połącznie nieprawidłowe z bazą weterynarztc<br>";
            }
        
            mysqli_set_charset($polaczanie,'utf8');
        
            $zapytanie = "SELECT zwierzeta.id, `imie`,`wlasciciel` from zwierzeta where `rodzaj` = 1;";
        
            if($rezultat = mysqli_query($polaczanie,$zapytanie)){
                
                while($wiersz = mysqli_fetch_row($rezultat)){
                    echo <<<WIERSZ
                    $wiersz[0]
                    $wiersz[1]
                    $wiersz[2]<br>
WIERSZ;
                }
                
            }else{
                echo "Błędne zapytanie";
            }
        ?>
        <h2>KOTY</h2>
        <?php
        
            $zapytanie = "SELECT zwierzeta.id, `imie`,`wlasciciel` from zwierzeta where `rodzaj` = 2;";
        
            if($rezultat = mysqli_query($polaczanie,$zapytanie)){
                
                while($wiersz = mysqli_fetch_row($rezultat)){
                    echo <<<WIERSZ
                    $wiersz[0]
                    $wiersz[1]
                    $wiersz[2]<br>
WIERSZ;
                }
                
            }else{
                echo "Błędne zapytanie";
            } 
        
        ?>
    </div>
    <div id="panelSrodkowy"><h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
    
        <?php
        
            $zapytanie = "SELECT imie, telefon, szczepienie, opis FROM `zwierzeta`;";
        
            $rezultat = mysqli_query($polaczanie,$zapytanie);  
        
            if($rezultat){
                
                while($wiersz = mysqli_fetch_assoc($rezultat)){
                    echo <<<WIERSZ
                    Pacjent: $wiersz[imie] <br>
                    Telefon właściciela: $wiersz[telefon],
                    ostatnie szczepienie: $wiersz[szczepienie],
                    informacje: $wiersz[opis]
                    <hr>
WIERSZ;
                }
                
            }else{
                echo "Błędne zapytanie";
            } 
            mysqli_close($polaczenie);
        ?>
        
    </div>
    <div id="panelPrawy"></div>
</body>
</html>