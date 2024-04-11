<?php
    echo "<center><h2>Aula 9</h2></center>";
    for ($x = 0; $x <= 10; $x++){
        echo "O número é: $x <br>";
    }
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";
    for ($x = 1; $x <= 10; $x++){
        if ($x == 4)
            break;
        echo "É: $x !<br>";
    }
    echo "<BR><b>E JÁ!!!</b><br>";
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";
    for ($x = 0; $x <= 10; $x++){
        if ($x == 5)continue;
        echo "Este número é: $x <br>";
    }
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";
    $i = 1;
    while($i < 6){
        echo "O número é: $i <br>";
        $i++;
    }
?>