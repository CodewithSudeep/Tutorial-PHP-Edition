<?php

// print fibonacci sequence upto 10th terms using do while loop
$fib1=0;
$fib2=1;
echo "The fibnacci sequence upto 10th tems are liste below:<br>";
echo $fib1,"<br>",$fib2,"<br>";
$count=1;
do{
    $fib3=$fib1+$fib2;
    echo $fib3,"<br>";
    $fib1=$fib2;
    $fib2=$fib3;
    $count++;
}while($count<=8);


?>
