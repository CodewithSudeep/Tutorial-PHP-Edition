<?php


$intro = "Welcome to new social media platform, ";

$name = "Sisam Gautam";

//append your name to intro varibale and print the result
$intro.= $name;
echo $intro . "<br>";


//print reverse of result
$rev = strrev($intro);
echo $rev . "<br>";


//print total word count
$count = str_word_count($intro);
echo "Total number of word is: ", $count;
?>


