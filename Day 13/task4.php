<?php


// demonstrate the use following function
// 1. explode()

$str = "HELLO i am sarbendra sigdel";

$arr = explode(" " , $str );

print_r($arr) ;

echo "<br/>";   

// 2. implode()

$array = ["i" ,"am", "sarbendra", "sigdel"];
$st1 = implode(" ",$array);

echo $st1;
echo "<br/>";





// 3. count()


echo  count($array);
echo "<br/>";


// 4. array_sum()

$num = [2,4,6,8,3,4,5];

echo array_sum($num);


?>