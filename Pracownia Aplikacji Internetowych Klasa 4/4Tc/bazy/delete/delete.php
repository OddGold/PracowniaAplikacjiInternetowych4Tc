<?php

    $polaczenie = new mysqli('localhost','root','','przychodniatc');

    if(!$polaczenie->connect_errno){

    $id = $_GET['id'];

    $sql= "DELETE FROM `pacjenci` WHERE id = $id;";
        
    if($rezultat=$polaczenie->query($sql)){
        
    $polaczenie->close();
        header("Location: pacjent.php");
        
    }else{
        echo "Błąd w zapytaniu";
    }

    }else{
        echo "Błąd w połączeniu";
    }
    
    $polaczenie->close();

?>