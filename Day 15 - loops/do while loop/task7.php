<?php

// find all palindrome number in range of 100 - 1000 using do while loop.
$num=100;
do{
    if((strrev($num))==$num){
        echo "The number $num is palindrome <br/>";
    }
    $num++;
}while($num<=1000);
?>