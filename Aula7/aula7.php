<?php
    date_default_timezone_set('America/Sao_Paulo');
        echo "<center><h2>Aula 7</h2></center>";
echo "<br>";
echo "<br>";
$y = date("H:i:s");
    echo("$y");
    echo "<br>";
    echo "###############################";
    echo "<br>";
$y = date("d-m-y H:i:s");
    echo("$y");
    echo "<br>";
    echo "###############################";
    echo "<br>";
$y = date("D M j G:i:s T Y");
    echo("$y");
    echo "<br>";
    echo "###############################";
    echo "<br>";
    $favcolor = 'red';
    switch($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color neither red, blue, or green!";
    }
    echo "<br>";
    echo "###############################";
    echo "<br>";
?>