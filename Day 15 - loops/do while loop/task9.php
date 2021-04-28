<?php

$testArray = array(array(2,4,5,6,7,8));

$i=0;
$j=0;
do{
    echo $testArray[$i].[$j];
    $j++;
}
while($j<6);
// print all element in array using do while loop
?>