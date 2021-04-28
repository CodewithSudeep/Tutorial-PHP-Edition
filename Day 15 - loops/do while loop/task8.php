<?php

// print fibonacci sequence upto 10th terms using do while loop
$num1=0;
$num2=1;
echo $a."<br>".$b."<br>";
$count=2;
do{
    $sum=$num1+$num2;
    echo $sum."<br>";
    $num1=$num2;
    $num2=$sum;
    $count++;
}
while($count<=10);
?>