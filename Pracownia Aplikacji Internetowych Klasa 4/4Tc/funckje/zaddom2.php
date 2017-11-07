<?php
session_start();
if(!isset($_SESSION['spis'])){
$spisPensji = array(
    "Styczen" => array(),
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
    $_SESSION['miesiac'] = array();
    $_SESSION['spis'] = $spisPensji;
}
$czyJest=false;
$pensja = $_GET['pensja'];
$miesiac = $_GET['miesiac'];
//branie daty
$data = getdate();
$rok = $data['year']; 
$miesiac2 = $data['mon']; 
if($miesiac2<10) $miesiac2='0'.$miesiac2;
$dzien = $data['mday']; 
if($dzien<10) $dzien='0'.$dzien;
$godzina = $data['hours'];
if($godzina<10) $godzina='0'.$godzina;
$minut = $data['minutes'];
if($minut<10) $minut='0'.$minut;
$sekund = $data['seconds'];
if($sekund<10) $sekund='0'.$sekund;
$dataPelna = "$dzien/$miesiac2/$rok";
$czas = "$godzina:$minut:$sekund";

foreach($_SESSION['miesiac'] as $a){
    if($a == $miesiac) $czyJest = true;
}
if($czyJest){
    $_SESSION['komunikat'] = '<span style="color: red">BŁĄD. MIESIĄC ZOSTAŁ JUZ PODANY</span>'; 
}else{
    $_SESSION['spis'][$miesiac]['pensja'] = $pensja;
    $_SESSION['spis'][$miesiac]['data'] = $dataPelna;
    $_SESSION['spis'][$miesiac]['czas'] = $czas;
    $_SESSION['komunikat'] = '<span style="color: red">Dodano pomyślnie pensje, czyli pensja w miesiącu '.$miesiac.' wynosi '.$_SESSION['spis'][$miesiac]['pensja'].' zł<br>Dodano w dniu '.$_SESSION['spis'][$miesiac]['data'].' o     godzinie: '.$_SESSION['spis'][$miesiac]['czas'].'</span>';
    array_push($_SESSION['miesiac'],$miesiac);
}
header("Location: zaddom.php");

?>