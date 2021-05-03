<?php

// create an array with random natural numbers
// print the elements in array using while loop

$numbers= array(9,8,79,85,55,77);
$x=0;
$endofarray=count($numbers);
echo "The array elements are : <br>";
while ($x<$endofarray){
    echo $numbers[$x],"<br>";
    $x++;
}
?>