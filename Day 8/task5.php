<?php


//use arithmetic operator to find 16^16
//perform same task using assignment operator

$a = 16;
$b = 16;
$raise = $a ** $b;
echo "The ($a^$b) is $raise<br/>"; //using arithmetic operator

$a **=$b;
echo "The (16^16) is $a"; //using assignment operator

?>