<?php

// find all palindrome number in range of 100 - 1000 using do while loop.
$x=100;
echo "The palindrome numbers in range of 100-1000 are listed below:<br>";
do{
    if(strrev($x)==$x){
        echo $x,"<br>";
    }
    $x++;
}while($x<=1000);


?>