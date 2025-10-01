<?php

$x = 5;
function localVariable(){
    $y = 10;
    echo $y;

}

localvariable();
echo "\n, $x";

echo "<br>";

$x = 5;
$y = 7;
function sum(){
    global $x, $y;
    $y = $x + $y;
}
sum();
echo $y;


?>