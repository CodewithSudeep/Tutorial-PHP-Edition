<?php

// create an associative array 
// create a function which returns the key of associative array
$name=array("raj"=>9,"rik"=>8,"adarsh"=>21);
function rkey($n){
    return array_keys($n);

}
$key=rkey($name);
var_dump($key);
?>




