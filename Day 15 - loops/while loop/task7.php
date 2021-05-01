<?php

// find all palindrome number in range of 100 - 1000 using while loop
// print using HTML list
$a=100;
while($a<=1000){
    echo "<ul>";
    if((strrev($a))==$a){
        echo"<li>$a</li>";
    }
    $a++;
    echo "</ul>";
}