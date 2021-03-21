<?php

//1. reverse the varibale created in task7 and find the position of your college name in string.
$string1="Hello,I am Aadarsha";
echo $string1;
echo"<br>";
$string2=str_replace("Aadarsha","NCIT",$string1);
$string3=strrev($string2);
echo $string3;
echo"<br>";
$string4=strpos($string3,"NCIT");
echo $string4;
?>