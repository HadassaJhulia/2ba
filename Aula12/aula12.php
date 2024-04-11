<?php
    echo "<center><h2>Aula 12</h2></center>";
    $cars = [
        0 => "Volvo",
        1 => "BMW",
        2 => "Toyota"
    ];
    echo "<br>";
    echo $cars["0"];
    echo "<br>";
    echo $cars['1'];

    $myCar = [
        "brand" => "Ford",
        "model" => "Mustang",
        "year" => 1964
    ];

    $cars =[];
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    echo "<br>";
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $cars["year"] = 2024;

    foreach ($cars as $x => $y){
        echo "$x: $y <br>";
    }

    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";
?>