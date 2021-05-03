<?php

// find all palindrome number in range of 100 - 1000 using for loop
// print using HTML list
echo "<ol>";

for($x=100;$x<1000;$x++){
    if(strrev($x)==$x){
        echo "<li>$x</li>";
    }
}

echo "</ol>";

