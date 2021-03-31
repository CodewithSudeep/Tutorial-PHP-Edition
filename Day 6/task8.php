<?php

//1. reverse the varibale created in task7 and find the position of your college name in string.
$var1 = "Hello, I am Sisam Gautam.";
$replace = str_replace("Sisam Gautam", "Nepathya College", $var1);
echo $replace . "<br>";
echo strrev($var1) . "<br>";
$pos = strpos($replace, "Nepathya College");
echo "The position of my college name is:", $pos;
?>
