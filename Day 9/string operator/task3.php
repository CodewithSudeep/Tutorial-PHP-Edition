<?php


$intro = "Welcome to new social media platform, ";

$name ="Aadarsha"; //ypur name;

//append your name to intro varibale and print the result
$intro.=$name;
echo $intro;

//print reverse of result
$intro=strrev($intro);


//print total word count
echo "<br>";
echo str_word_count($intro);
?>

