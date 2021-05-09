<?php

//genrate a random number in range 45-70
$a= rand(45,70);


// find the square of random number

$b = $a**2;


// store the result in cookie with expiry of one month

setcookie("square",$b,time()+(86400*30));

echo $_COOKIE["square"];

?>