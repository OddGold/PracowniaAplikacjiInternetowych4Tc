<?php

	if(!isset($_COOKIE['szkola'])){
		setcookie('szkola','zsk'); //zwykłe utworzenie ciasteczka
		$komunikat = "Cookie o nazwie szkola nie bylo ustawione";
	}else{
		$komunikat = "Cookie jest ustawione";
		$komunikat .= " Jego wartość to ".$_COOKIE['szkola'];
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Cookie</title>
</head>
<body>
	<?php
	
		echo $komunikat;
	
	?>
</body>	
</html>