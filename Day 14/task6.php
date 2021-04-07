<?php

//create a function which takes a string argument and returns the character in array
function string($arr1){
    return explode(" ",$arr1);
}
$x= string("i m rikesh");
print_r($x);
?>