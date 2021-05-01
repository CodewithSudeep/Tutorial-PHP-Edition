<?php

$testArray = array(array(2,4,5,6,7,8));


// print all element in array using do while loop
$a=0;
$b=0;
do{
    echo $testArray[$a][$b]. " ";
    $b++;
}while($b<6);
?>