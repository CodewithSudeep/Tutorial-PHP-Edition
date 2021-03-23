<?php
// use case case to determine
// 1. resut is even number
// 2. result is less than 40
// 3. result is greater than 50 and is even number
// 4. result is less than 100 and and greater than 80
// not 1 2 3 4 { not decided }

$x= 9;

$square =$x**2; // square of $x
switch($square){
    case ($square%2==0):
        echo $square." is even";
        break;
    case ($square<40):
        echo $square."Less than 40";
        break;
    case ($square%2==0&&$square>50):
        echo $square." is greater than 50 and is even number";
        break;
    case ($square<100&&$square>80):
        echo $square." less than 100 and and greater than 80";
        break;
    default:
        echo"Sorrry!Not decided";
}
?>
    
}

