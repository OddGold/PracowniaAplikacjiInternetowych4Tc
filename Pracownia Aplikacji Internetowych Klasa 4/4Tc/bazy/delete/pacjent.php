<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>

<body>
    
    <?php
        $polaczenie = new mysqli('localhost','root','','przychodniatc');
    
        $polaczenie->set_charset('utf8');   
    
        if(!$polaczenie->connect_errno){
            //echo "XD";
            if(isset($_GET['sort']))
            $sort = $_GET['sort'];
            if(isset($_SESSION['sort'])){
            if($_SESSION['sort']==$sort) $sort=$sort." DESC";
                }
            else $sort = 'id';
            
            $_SESSION['sort']=$sort;
            
            $sql = "Select * from pacjenci order by $sort;";
            
            $rezultat = $polaczenie->query($sql);
            
            echo<<<TABELA
            <table>
            <tr>
                <th><a href="pacjent.php?sort=id">id</a></th>    
                <th><a href="pacjent.php?sort=imie">Imie</a></th>    
                <th><a href="pacjent.php?sort=nazwisko">Nazwisko</a></th>    
                <th><a href="pacjent.php?sort=choroby_przewlekle">Choroby przewlekłe</a></th>    
                <th><a href="pacjent.php?sort=uczulenia">Uczulenia</a></th>    
                <th><a href="pacjent.php?sort=choroba">Choroba</a></th>    
                <th><a href="pacjent.php?sort=leki_przepisane">Leki przepisane</a></th>    
                <th>Usuń</th>     
            </tr>        
TABELA;
            if($rezultat = $polaczenie->query($sql)){
                while($wynik = $rezultat->fetch_assoc()){
                  echo<<<TABELA
                  <tr>
                    <td>$wynik[id]</td>
                    <td>$wynik[imie]</td>
                    <td>$wynik[nazwisko]</td>
                    <td>$wynik[choroby_przewlekle]</td>
                    <td>$wynik[uczulenia]</td>
                    <td>$wynik[choroba]</td>
                    <td>$wynik[leki_przepisane]</td>
                    <td><a href='delete.php?id=$wynik[id]'>Usuń</a></td>
                </tr>
TABELA;
                }
                echo "</table>";
                
            }else{
                echo "Błąd w zapytaniu!";
            }
        }else{
            echo "Błąd w połączeniu: ".$polaczenie->connect_errno;
        }
    
    
        $polaczenie->close();
    ?>
    
    <br>
    <br>
    <h2>Dodaj pacjenta</h2>
    <form action="insert.php" method="post">
        Imie: <input type="text" name="imie"><br>
        Nazwisko: <input type="text" name="nazwisko"><br>
        Choroby przewlekłe: <input type="text" name="choroby_przewlekle" value="brak"><br>
        Uczulenia: <input type="text" name="uczulenia" value="brak"><br>
        Choroba: <input type="text" name="choroba" value="brak"><br>
        Leki przepisane: <input type="text" name="leki_przepisane" value="brak"><br>
        <input type="submit" name="zatwierdz" value="DODAJ">
    </form>  
    
    
    
</body>

</html>