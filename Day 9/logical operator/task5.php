<?php
//debug

$true = TRUE;
$false = TRUE;

//perform all logical operator 
echo "<br>";
$ans=($true || $false);  //OR operator
echo var_dump($ans);
echo "<br>";
$get_ans=($true && $false);  //AND operator
echo var_dump($get_ans);
echo "<br>";
$result=($true  xor $false);  //XOR operator
echo var_dump($result);


?>