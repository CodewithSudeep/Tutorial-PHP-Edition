<?php


$intro = "Welcome to new social media platform, ";

$name = "sarbendra";                  //your name;

//append your name to intro varibale and print the result

$result = $intro.=$name; 

echo $result;
echo "<br/>";

//print reverse of result

echo strrev($result);
echo "<br/>";

//print total word count

echo str_word_count($result);

?>


