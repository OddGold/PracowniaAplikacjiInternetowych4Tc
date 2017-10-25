<!DOCTYPE html>
<html>
<head>
	<title>Zajęcia 1</title>
	<meta charset="utf-8">
</head>
<body>
<?php	 //znacznik kanoniczny
	//komentarz jednowierszowy
	
	#komentarz jednowierszowy unixowy
	
	/*Komentarz
	wielo
	wierszowy*/
	
	//wyświetlanie informacji
	echo("<br>cudzysłów<br>");
	
	echo('<br>apostrof<br>');
	
	echo "tekst<br>";
	echo 'tekst<br>';
	
	echo 16;
	echo "<br>Masz ",18," lat";
	echo "<h2>Nagłówek h2</h2>";
	//echo "<h2 style="color:blue"></h2>"; //tak nie działa
	echo '<h2 style="color:blue">DDX</h2>';
	// ' jest mocniejszy niz "
	
	
	print "test";// print ma wieksze mozliwosci niz echo ale nie ma konkatenacji przecinkiem jak echo print "XD" , "xD";
	
	
	
?>
	
	
<? //znacznik typu sgml(włączyc w php.ini short 4 razy)
	echo('lol');
?>
	
<!--
<%
	Znacznik typu asp, nie dziala w php7
%>
-->
	
<!--
Znacznik skryptów w html nie dziala w php7

<script language="php"></script>

-->
</body>
</html>