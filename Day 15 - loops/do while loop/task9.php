<?php

$testArray = array(array(2,4,5,6,7,8));


// print all element in array using do while loop
$i=0;
$j=0;
echo "The elements in the array are:<br>";
do{
    echo $testArray[$i][$j],"<br>";
    $j++;
}while($j<6);

?>