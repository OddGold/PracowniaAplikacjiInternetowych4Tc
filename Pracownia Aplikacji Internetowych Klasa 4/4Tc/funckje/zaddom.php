<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    
</head>

<body>

<!--//zad dom 
//użytkownik podaje z klawiatury ilosc pieniędzy jakie dostał za prace(w formularzu) wstaw sumy do tablicy stworz tablice asocjacyjną w której kluczami będą miesiące. Suma za pracę bedzie automatycznie wstawiana do tablicy w zaleznosci od miesiąca. wstaw również do tablicy potwierdzenie dotyczące daty, godziny, minut i sekund w jakiej użytkownik dostał pieniądze. Użytkownik może wybrać okres w jakim chce sprawdzic ile zarobił jak również średni zarobek z 3 ostatnich miesiecy oraz całego roku.-->
    
<form action="zaddom2.php">
    
Ile zarobiłeś?<input type="number" name="pensja">
Jakiego miesiąca?<select name="miesiac">
    <option>Styczen</option>
    <option>Luty</option>
    <option>Marzec</option>
    <option>Kwiecień</option>
    <option>Maj</option>
    <option>Czerwiec</option>
    <option>Lipiec</option>
    <option>Sierpien</option>
    <option>Wrzesien</option>
    <option>Pazdziernik</option>
    <option>Listopad</option>
    <option>Grudzien</option>
    </select>
<input type="submit">
</form>
<?php
    if(isset($_SESSION["komunikat"])){
    echo $_SESSION['komunikat'];
    unset($_SESSION['komunikat']);
    }
?>
    
    
</body>
</html>