<?php


$intro = "Welcome to new social media platform, ";

$name = "Bibek Angdembe.";

//append your name to intro varibale and print the result
$result = $intro.$name;
echo $result,"<br/>";


//print reverse of result
echo "The reversed sentence is ",strrev($result),"<br/>";


//print total word count
echo "The total word count is ",str_word_count($result);

?>
