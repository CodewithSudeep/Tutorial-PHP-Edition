<?php

$x= 9;

$square = 81;   // square of $x
// $mod = $square % 2 ;

// use case case to determine
// 1. resut is even number
// 2. result is less than 40
// 3. result is greater than 50 and is even number
// 4. result is less than 100 and and greater than 80
// not 1 2 3 4 { not decided }

switch ($square)
{
case $square %2 ==0 :
    echo "result is even";
    break;
    case $square < 40 :
        echo "result is less than 40";
        break;
        case ($square > 50 && $square %2 ==0) :
            echo "result is even and greater than 50";
            break;
            case ($square < 100 && $square %2 ==0) :
                echo "result is less than 100 and greater than 80";
                break;
                default :
                echo "not decided";
                break;

}
?>