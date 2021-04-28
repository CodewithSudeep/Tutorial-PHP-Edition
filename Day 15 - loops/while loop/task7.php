<?php

// find all palindrome number in range of 100 - 1000 using while loop
// print using HTML list
$num=100;
while($num<=1000)
{
    if(strrev($num)==$num)
    {
        echo"<ul>
        <li>".$num."</li>";
        echo "<br>";
        echo "</ul>";  
    }
    $num++;
}
?>