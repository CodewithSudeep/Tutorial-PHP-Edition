<?php

// create an array with random natural numbers
// print the elements in array using while loop
$arr =array(5,78,23,34,56,1,0,4);
$arrLength = count($arr);  //gets length of array
$i=0;
while($i<$arrLength){
    echo $arr[$i]."<br/>";
    $i++;
}
?>