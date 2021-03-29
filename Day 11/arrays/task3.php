<?php

//create an array for your fav destination to visit ( minimum 5)
// concatinate 3th item with 5th item and print the result
$my_array=array("ABC","Rara Lake","Ghandruk","Mustang","Pokhara");
var_dump($my_array);
echo "<br>";
$my_array[2].=$my_array[4];
var_dump($my_array);
echo "<br>";
echo($my_array[2]);
?>