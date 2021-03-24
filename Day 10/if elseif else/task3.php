<?php

$base = 3;
$power = 4;

//find base to the power and check whether result is 
// 1. less than 10 or 
// 2. greater than 60
// 3. not 1 and 2
$pow = $base**$power;
if($pow<10){
   echo "less than 10";
}elseif($pow>60){
    echo "Greater than 60";
}else{
    echo "Neither of them";
}
?>


