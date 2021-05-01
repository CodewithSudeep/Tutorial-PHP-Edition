<?php

// find all palindrome number in range of 100 - 1000 using for loop
// print using HTML list
echo "<ol>";
for($i=100;$i<=1000;$i++){
    if((strrev($i))==$i){
        echo "<li>$i</li>";    
    }
}
echo "</ol>";
?> 

