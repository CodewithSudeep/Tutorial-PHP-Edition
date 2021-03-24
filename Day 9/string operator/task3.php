<?php


$intro = "Welcome to new social media platform, ";

$name = "rajtuladhar";//your name;
$result=$intro.$name;
echo $result;
echo"<br/>";
//append your name to intro varibale and print the result




//print reverse of result
echo strrev($result);
echo"<br/>";


//print total word count
echo str_word_count($result);
?>
