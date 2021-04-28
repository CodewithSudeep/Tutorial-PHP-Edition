<?php

// find all palindrome number in range of 100 - 1000 using do while loop.

$n = 100;
// $pal = strrev($n);

do{
if( strrev($n) == $n)
{

    echo $n."<br/>";

}
$n++;

}
while($n <= 1000);