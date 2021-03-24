<?php


$x= 5;
$y = 3;

//find the product and check whether the result is greater than 100 or is even number or non of these;


$res = $x * $y;
$mod = $res%2;

if($res > 100 || $mod = 0)
{
    echo "true";
}

else{
    echo " none of these";
}

?>