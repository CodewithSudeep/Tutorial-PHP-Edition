<?php


$intro = "Hey!,Are,you,enjoying,PHP?";

// create a function which generates an array of characters in given string
// create another function which reverses the array from 1.
// create another function which joins all characters in array of 2 and print it.

$temp = explode(",",$intro);
$temp = array_reverse($temp);
$new = implode("_",$temp);
echo $new;
?>
