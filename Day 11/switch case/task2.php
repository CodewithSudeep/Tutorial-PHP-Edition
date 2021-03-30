<?php
// use case case to determine
// 1. resut is even number
// 2. result is less than 40
// 3. result is greater than 50 and is even number
// 4. result is less than 100 and and greater than 80
// not 1 2 3 4 { not decided }

$x= 9;

$y =pow($x,2); // square of $x
switch($y){
    case ($y%2==0):
        echo $y." is an even";
        break;
    case ($y<40):
        echo $y."is less than 40";
        break;
    case ($y%2==0 && $y>50):
        echo $y ." is greater than 50 and is even number";
        break;
    case ($y <100 && $y>80):
        echo  $y." less than 100 and and greater than 80";
        break;
    default:
        echo "sorry operation invalid";
}
?>
    