<?php

// create two varibale of int data type and perform :
// 1. identical 2. not identical 3. spaceship

$num1 = 10;
$num2 = 10;
var_dump($num1 === $num2);   //identical
echo "<br>";
var_dump($num1 !== $num2);    //not identical
echo "<br>";   
var_dump($num1 <=> $num2);   //spaceship
?>
