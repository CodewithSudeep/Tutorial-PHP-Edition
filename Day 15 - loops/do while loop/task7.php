<?php

// find all palindrome number in range of 100 - 1000 using do while loop.
 $a=100;
 do{
     if((strrev($a))==$a){
         echo $a."<br>";
     }
     $a++;
 }
 while($a<=1000);
 ?>