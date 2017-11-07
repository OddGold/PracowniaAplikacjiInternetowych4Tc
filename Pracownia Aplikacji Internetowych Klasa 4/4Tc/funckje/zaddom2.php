<?php
session_start();
$spisPensji = array(
    "styczen" => array(),
    "Luty" => array(),
    "Marzec" => array(),
    "Kwiecień" => array(),
    "Maj" => array(),
    "Czerwiec" => array(),
    "Lipiec" => array(),
    "Sierpien" => array(),
    "Wrzesien" => array(),
    "Pazdziernik" => array(),
    "Listopad" => array(),
    "Grudzien" => array()
);
$pensja = $_GET['pensja'];
$miesiac = $_GET['miesiac'];
$data = getdate();
$rok = $data['year']; 
$miesiac = $data['mon']; 
$dzien = $data['mday']; 
$godzina = $data['hours'];
$minut = $data['minutes'];
$sekund = $data['seconds'];
$dataPelna = "$dzien/$miesiac/$rok";
$czas = "$godzina:$minut:$sekund";
if($_SESSION['miesiac']==$miesiac){
$_SESSION['komunikat'] = '<span style="color: red">BŁĄD. MIESIĄC ZOSTAŁ JUZ PODANY</span>'; 
}else{
$spisPensji[$miesiac]['pensja'] = $pensja;
$_SESSION['komunikat'] = '<span style="color: red">Dodano pomyślnie pensje, czyli pensja w miesiącu '.$miesiac.' wynosi '.$spisPensji[$miesiac]['pensja'].' zł<br>Dodano w dniu '.$dataPelna.' o godzinie: '.$czas.'</span>';
$_SESSION['miesiac'] = $miesiac;
}
header("Location: zaddom.php");

?>