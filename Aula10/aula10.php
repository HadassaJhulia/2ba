<?php
    echo "<center><h2>Aula 10</h2></center>";
    /*
    Vetor de 1 dimenção (X)
    Vetor de 2 dimenções (X,Y) BIDIMENCIONAL ou MATRIZ
    Vetor de 3 dimenções (X,Y,Z) TRIDIMENCIONAL ou MATRIZ
    */
    $colors = array("red", "green", "blue", "yellow", "1", "2", "A", "B");
    #Armazena e compara cada vetor 1 a 1;
    foreach ($colors as $x){
        echo "$x <br>";
    }
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";

    $members = array("Peter" => "35", "Ben"  => "37", "Joe" => "43");
    foreach ($members as $x => $y){
        echo "$x : $y<br>";
    }
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $x){
        if($x == "blue")
            break;
        echo "$x <br>";
    }
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $x){
        if($x == "blue")
            continue;
        echo "$x <br>";
    }
    echo "<br>";
    echo "###############################";
    echo "<br>";
    echo "<br>";

    class Car{
        public $color;
        public $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }
    }
    $myCar = new Car("black", "Civic");
    foreach($myCar as $x => $y){
        echo "$x: $y<br>";
    }
?>