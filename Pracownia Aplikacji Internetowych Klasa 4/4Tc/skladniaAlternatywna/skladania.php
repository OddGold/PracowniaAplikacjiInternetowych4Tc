<?php

//instrukcja if
    $x = 2;
    $y = 4;
    if($x < $y){
        echo "zmienna x jest mniejsza od zmiennej y<br>";
    }
    if($x<$y): 
        echo "zmienna x jest mniejsza od zmiennej y<br>";
    endif;

//instrukcja else if

    $a = 2;
    $b = 2;
    
    if($a<$b){
        echo "a mniejsze od b <br>";
    }else{
        echo "a wieksze od b<br>";
    }

    if($a<$b):
        echo "a mniejsze od b <br>";
    else:
        echo "a wieksze od b<br>";
    endif;

//instrukcja if ... else if

    if($a<$b){
        echo "a mniejsze od b <br>";
    }else if($a==$b){
        echo "a równe b<br>";
    }
    else{
        echo "a wieksze od b<br>";
    }

    if($a<$b):
        echo "a mniejsze od b <br>";
    elseif($a==$b): //MUSI BYC ELSEIF!!!!!!!!!!!! NIE WOLNO ELSE IF!!!
        echo "a równe b<br>";
    else:
        echo "a wieksze od b<br>";
    endif;
    
//instrukcja switch

    $a = 5; 

    switch($a){
        case 0:
            echo "zmienna a = 0<br>";
        break;
        case 1:
            echo "zmienna a = 1<br>";
        break;
        case 2:
            echo "zmienna a = 2<br>";
        break;
        case 3:
            echo "zmienna a = 3<br>";
        break;
        case 4:
            echo "zmienna a = 4<br>";
        break;
        case 5:
            echo "zmienna a = 5<br>";
        break;
    }
    echo $a,"<br>";
    
    switch($a):
        case 0:
            echo "zmienna a = 0<br>";
        break;
        case 10:
            echo "zmienna a = 1<br>";
        break;
        break;
        case 5:
            echo "zmienna a = 5<br>";
        break;
    endswitch;
    
//******************************************************************************8

//petla for

    for($i=1;$i<10;$i++){
        echo "$i  ";
    }
    echo "<br>";
    for($i=1;$i<10;$i++):
        echo "$i ";
    endfor;
    echo "<br>";
//petla foreach

    $tab = array(1,2,3,4,5);

    foreach($tab as $klucz => $x){
        echo "$klucz: $x  ";
    }

    foreach($tab as $klucz => $x):
        echo "$klucz: $x  ";
    endforeach;

    echo "<br>";
    
//while

    $i = 3;
    while($i <= 10){
        echo "$i ";
        $i++;
    }
    echo "<br>";
    $i = 3;
    while($i <= 10):
        echo "$i ";
        $i++;
    endwhile;
    
//break

    for($i; ;$i--):
        echo "Zmienna i wynosi: $i <br>";
        if($i == 5):
            break;
        endif;
    endfor;
    
//continiue 

    for($i = 1; $i<10; $i++):
        if($i%2 != 0) continue; // przechodzimy do kolejnej iteracji pętli
        echo $i." ";
    endfor;
?>