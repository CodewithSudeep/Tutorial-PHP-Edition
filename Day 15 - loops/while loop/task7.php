<?php

// find all palindrome number in range of 100 - 1000 using while loop
// print using HTML list
echo "<ol>";
$i=100;
while($i<=1000){
    if((strrev($i))==$i){
        echo "<li>$i</li>";    
    }
    $i++;
}
echo "</ol>";
?>