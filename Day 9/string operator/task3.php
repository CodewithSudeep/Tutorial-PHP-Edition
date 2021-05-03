<?php


$intro = "Welcome to new social media platform, ";

$name ="Pradip Kunwar"; //your name;

//append your name to intro varibale and print the result
$result=$intro.=$name;
echo "<br>";
echo "The appended string is: ",$result,"<br>";
//print reverse of result
echo "Revesrse of a string is ",strrev($result),"<br>";
//print total word count
echo "Total no of words in a string is ",str_word_count($result);

?>

