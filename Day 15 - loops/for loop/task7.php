<?php

// find all palindrome number in range of 100 - 1000 using for loop
// print using HTML list
for($num=100;$num<=1000;$num++)
{
    if(strrev($num)==$num)
    {
        echo"<ul>
        <li>".$num."</li>";
        echo "<br>";
        echo "</ul>";

         
    }
}
?>