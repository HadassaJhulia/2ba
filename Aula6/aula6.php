<?php
    if (5 > 3) {
        echo "Have a good day and good idea!";
}
echo "<br>";
echo "###############################";
echo "<br>";

$t = 14;
if ($t != 20) {
    echo "Have a good day and good idea!";
}
echo "<br>";
echo "###############################";
echo "<br>";

$t = 14;
if ($t == 20) {
    echo "Have a good day and good idea!";
} else{
    echo "Not have a good day and good idea!";
}
echo "<br>";
echo "###############################";
echo "<br>";

$z = date("H");
if ($z < "19") {
    echo "Have a good day!";
} else{
    echo "Have a good night!";
}
echo "<br>";
echo "###############################";
echo "<br>";

$y = date("H") - 3;
if ($y < "8") {
    echo("Have a good morning!");
} elseif ($y < "12"){
    echo "Have a good day!";
} else{
    echo "Have a good night!";
}
echo "<br>";
echo "###############################";
echo "<br>";
?>