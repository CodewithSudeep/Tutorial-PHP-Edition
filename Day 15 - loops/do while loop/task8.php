<?php

// print fibonacci sequence upto 10th terms using do while loop
$a=0;
$b=1;
echo $a."<br>".$b."<br>";
$count=3;
do{
    $c=$a+$b;
    echo $c."<br>";
    $a=$b;
    $b=$c;
    $count++;
}
while($count<=10);
?>