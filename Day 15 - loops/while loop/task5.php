<?php


//print all prime number in range 1 to 100 using while loop

$num=2;

while($num<=100)
{

$i = 1;
$count = 0;

while($i<$num)
{
if(($num%$i)==0)
{
    $count++;
}

$i++;

}

if($count == 1)
{
    echo $num. "<br/>";
}

$num++;

}

?>