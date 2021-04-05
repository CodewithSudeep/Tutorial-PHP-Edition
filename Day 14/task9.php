<?php
// create an associative array 
// create a function which returns the key of associative array
$result = array("English"=>50,"Math"=>40,"oop"=>60,"computer"=>70);
//echo $result['oop'];

function reKey($arr){
    return array_keys($arr);
}
//array_keys()  returns the keys of assocative array
$keys = reKey($result);
var_dump($keys);

?>
