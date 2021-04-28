<?php

// print fibonacci sequence upto 10th terms using do while loop

$num = 0;
$a = 0;
$b = 1;
echo $a."<br/>";
echo $b."<br/>";

do{

$c = $a + $b;

echo $c."<br/>";
$a = $b;
$b = $c;
$num++;

}

while($num<=7);
