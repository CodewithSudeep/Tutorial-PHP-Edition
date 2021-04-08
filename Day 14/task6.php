<?php

//create a function which takes a string argument and returns the character in array
function string($str){
    return explode(' ',$str);

}
$arr= string("my name is raj tuladhar");
var_dump( $arr);