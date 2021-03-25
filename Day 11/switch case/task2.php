<?php

$x= 9;

$x**=2; // square of $x


// use case case to determine
// 1. resut is even number
// 2. result is less than 40
// 3. result is greater than 50 and is even number
// 4. result is less than 100 and and greater than 80
// not 1 2 3 4 { not decided }
switch($x){
    case $x%2==0:
        echo "even  number";
        break;
    case $x<"40":
        echo "less than 40";
        break;
    case $x>50&&$x%2==0:
        echo" greater than 50 and even";
        break;
    case $x<100 && $x>80:
        echo"less than 100 and greater than 80";
        break;
    default:
    echo"not decided";


}


