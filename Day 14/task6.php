<?php
//create a function which takes a string argument and returns the character in array
function strtoArray($string){
    return (explode(" ",$string));
}
//explode() means break into pieces such that string to array(pieces of word)
$arr = strtoArray("Hello i am from ilam");
print_r($arr);
?>