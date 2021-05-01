<?php

// print fibonacci sequence upto 10th terms using do while loop
$n1=0;
$n2=1;
echo "$n1 </br>";
echo "$n2<br/>";
$count=2;
do{
    $total=$n1+$n2;
    echo "$total </br>";
    $n1=$n2;
    $n2=$total;
    $count++;
}while($count<=10);
?>