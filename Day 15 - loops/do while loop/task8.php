<?php

// print fibonacci sequence upto 10th terms using do while loop
$a =0;
$b =1;
echo $a."<br/>".$b."<br/>";
$count = 2;
do{
    $total = $a + $b;
    echo $total."<br/>";
    $a = $b;
    $b = $total;
    $count++;

}while($count<=10);