<?php

    $polaczenie = new mysqli('localhost','root','','przychodniatc');
    $polaczenie->set_charset("utf8");
     

    if(!$polaczenie->connect_errno){
        if(!empty($_POST['imie'])&&!empty($_POST['nazwisko'])){
        $imie = $_POST['imie']; 
        $nazwisko = $_POST['nazwisko'];
        $choroby_przewlekle = $_POST['choroby_przewlekle'];
        $uczulenia = $_POST['uczulenia']; 
        $choroba = $_POST['choroba'];
        $leki_przepisane = $_POST['leki_przepisane'];
           // $imie = $polaczenie->real_escape_string($imie);
        $imie = $polaczenie->real_escape_string(htmlentities($imie));
        $nazwisko = $polaczenie->real_escape_string(htmlentities($nazwisko));
        $choroby_przewlekle = $polaczenie->real_escape_string(htmlentities($choroby_przewlekle));
        $uczulenia = $polaczenie->real_escape_string(htmlentities($uczulenia));
        $choroba = $polaczenie->real_escape_string(htmlentities($choroba));
        $leki_przepisane = $polaczenie->real_escape_string(htmlentities($leki_przepisane));
        $sql = "INSERT INTO `pacjenci` VALUES(NULL,'$imie','$nazwisko','$choroby_przewlekle','$uczulenia','$choroba','$leki_przepisane',NULL);";
            if($rezultat = $polaczenie->query($sql)){
                header("Location: pacjent.php");
                $polaczenie->close();
            }else{
                echo "Błąd zapytania";
            }
            }else{
            header("Location: pacjent.php");
        }
    }else{
        echo "Błąd połączenia";
    }
    $polaczenie->close();
?>