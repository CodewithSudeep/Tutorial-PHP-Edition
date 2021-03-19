<?php

//find the value of smallest prime number to the power highest prime number in range 50-100

// smallest = 53 & highest=97

$i = 0 ;
$ans = 1;

for ($i=0; $i<97; $i++)
{

$ans = $ans * 53;

}

echo $ans;
echo "<br/>";

// assignment operator

$j=0;
$a2=1;

for($j=0; $j<97; $j++)
{
    $a2 *= 53;
}

echo $a2;
