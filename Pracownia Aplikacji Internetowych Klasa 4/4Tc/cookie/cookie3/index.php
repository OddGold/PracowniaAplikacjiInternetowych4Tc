<?php

if(isset($_GET['usun'])){
	setcookie('wiek');
	header("Location: index.php");
}

if(empty($_COOKIE['wiek']) && empty($_GET['wiek'])){
	include('header.html');
	include('form.html');
	include('footer.html');
}else if(!empty($_GET['wiek'])){
	setcookie('wiek',$_GET['wiek'], time()+60*60*24*365);
	include('header.html');
	echo "<p>Dziękujemy za podanie danych</p>";
	echo  "<p><a href=\"index.php?usun=\"\"\">powrot</a></p>";
	include('footer.html');
}else{
	 include('header.html');
	echo "twój wiek: {$_COOKIE['wiek']}";
	include('footer.html');
}

?>