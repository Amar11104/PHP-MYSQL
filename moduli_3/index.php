<?php
    $num = -5;
    if ($num < 0){
        echo "$num is smaller than 0";
    }

    echo "<br>";

    $age = 15;
    if (($age > 18) && ($age < 20)){
        echo "you are a teenager";
    }

    echo "<br>";

    if ($age < 18){
        echo "you are a teenager";
        }
    else
        echo "you are an adult";

    if ($age < 0){
        echo "if $num is smaller than 0 its negativ";
        }

    else if ($age == 0){
        echo "if $num is the same as  0 its the same";
        }
    else {
        echo "if $num its bigger its pozitive";
    }
    
    $a = 10;
    $b = 40;

    if ($a == $b){
        echo "true";
    }
    else if ($a > $b){
        echo "grater";
    }
    else{
        echo "false";
    }
        
?>