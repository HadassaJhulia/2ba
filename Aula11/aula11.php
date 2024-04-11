<?php
    echo "<center><h2>Aula 11</h2></center>";
    $car = array("brand" => "Ford", "model" => "Sanatana", "year" => "2000");
    var_dump($car);

    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";

    $car = array("brand" => "Ford", "model" => "Santana", "year" => "2000");
    echo $car["brand"] ;
    echo "<br>";
    echo $car["model"] ;
    echo "<br>";
    echo $car["year"] ;
    
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";

    $car = array("brand" => "Ford", "model" => "Santana", "year" => "2000", "Bartô" => "Hadassa");
    foreach ($car as $x => $y){
        echo "$x: $y <br>";
    }
?>