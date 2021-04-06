<?php


// demonstrate the use following function
// 1. explode()
// 2. implode()
// 3. count()
// 4. array_sum()
$string="Hello,My name is Aadarsha";
echo $string."<br>";
var_dump(explode(" ",$string));
echo"<br>";
$arr=array("It","is","beautiful","day.");
echo implode(" ",$arr)."<br>";
echo count($arr)."<br>";
$arr_num=array(23,78,2);
echo(array_sum($arr_num));
?>