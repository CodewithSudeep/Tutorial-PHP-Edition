<?php


//print all prime number in range 1 to 100 using for loop

for($num=1;$num<=100;$num++)
{
  
    $count=0;
    for($i=2;$i<=$num/2;$i++)
    {
        if($num%$i==0)
        {
            $count++;
        }
    }
    if($count==0 && $num!=1)
    {
        echo $num."<br>";
    }
}