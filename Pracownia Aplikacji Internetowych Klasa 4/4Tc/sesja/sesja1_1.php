<?php
    
    //session_name("zsk");

    session_start();

    

    

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>WIEK</title>
</head>
<body>
	
    Witamy 
    <?php
        echo $_SESSION['imie'];
    ?> na drugiej stronie!<br>
    Identyfikatorem sesji jest: <?php echo session_id(); ?><br>
    <a href="sesja1_2.php">Następna strona</a>
    
    <a href="sesja1_1.php?usunSesje">Usuń sesje</a>
    <?php
    
    if(isset($_GET['usunSesje'])){
        session_destroy();
    }
    
    ?>

</body>
</html>
