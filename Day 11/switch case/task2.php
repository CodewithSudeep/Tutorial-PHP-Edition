<?php

$x= 9;

$square = pow($x,2); // square of $x

// use case case to determine
// 1. resut is even number
// 2. result is less than 40
// 3. result is greater than 50 and is even number
// 4. result is less than 100 and and greater than 80
// not 1 2 3 4 { not decided }

switch($square){
    case ($square % 2 == 0):
        echo "Result is even";
        break;
    
    case ($square < 40):
        echo "Result is less than 40";
        break;

    case ($square > 50 && $square % 2 == 0):
        echo "Result is greater than 50 and is even number";
        break;

    case ($square < 50 && $square > 80):
        echo "Result is less than 100 and and greater than 80";
        break;

    default:
        echo "Not decided";
        break;
    
    
}
?>
