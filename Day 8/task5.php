<?php


//use arithmetic operator to find 16^16
//perform same task using assignment operator


// arithematic operator
$i=0;
$ans = 1;

for ($i=0; $i<16; $i++)
{
    $ans = $ans*16;
}

echo $ans;
echo "<br/>";

// assignment operator

$j=0;
$a2=1;

for($j=0; $j<16; $j++)
{
    $a2 *= 16;
}

echo $a2;