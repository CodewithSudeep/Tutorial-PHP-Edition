<?php
// create a function which takes an array of characters and returns the string
$brands = array('lenovo','apple','dell','hp');
function arrTostr($arr){
    return (implode("*",$arr));
}
//implode()  joins array elements to make a string
$string = arrTostr($brands);
echo $string;
?>