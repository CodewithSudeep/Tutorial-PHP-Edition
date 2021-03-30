<?php

$x= 9;

$square =pow($x,2); // square of $x
switch($square){
    case ($square%2==0):
    echo "$square is even";
    break;

    case ($square<40):
    echo "$square is less than 40";
    break;

    case ($square>50 && $square%2==0):
    echo "$square is greater than 50 and even";
    break;

    case ($square<100 && $square>80):
     echo "$square is less than 100 and greater than 80";
    break;

        default:
        echo "not decides";
}
?>      

