<?php

// create a function which takes an array of characters and returns the string
function  imp($arra){
    return (implode("-",$arra));

}
$arr=array('my','name','is','hero');
$string= imp($arr);
echo $string;