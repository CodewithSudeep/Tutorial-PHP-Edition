<?php


$intro = "Hey!,Are,you,enjoying,PHP?";

// create a function which generates an array of characters in given string
<<<<<<< HEAD
// create another function which reverses the array from 1.
// create another function which joins all characters in array of 2 and print it.

$temp = explode(",",$intro);
$temp = array_reverse($temp);
$new = implode("_",$temp);
echo $new;
=======
function rev($intro){
$temp = explode(",",$intro);
$temp = array_reverse($temp);
$new = implode("_",$temp);
return $new;
}
// create another function which reverses the array from 1.
// create another function which joins all characters in array of 2 and print it.


 $new=rev($intro);
 echo $new;

?>
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5

