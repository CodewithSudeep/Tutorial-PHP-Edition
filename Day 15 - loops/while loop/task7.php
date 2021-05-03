<?php

// find all palindrome number in range of 100 - 1000 using while loop
// print using HTML list
echo "All palindrome numbers in range 100-1000 are listed below:<br>";
echo "<ul>";
$x=100;
while($x<=1000){
    if((strrev($x))==$x){
        echo "<li>$x</li>";    
    }
    $x++;
}
echo "<ul>";

?>