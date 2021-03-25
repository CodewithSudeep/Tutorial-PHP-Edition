<?php

$base = 3;
$power = 4;

//find base to the power and check whether result is 
// 1. less than 10 or 
// 2. greater than 60
// 3. not 1 and 2
$result=$base**$power;

 if($result<"10"){
     echo  $result,"less than 10";
    }elseif($result>60){
        echo $result, " is greater than 60";
    }else{
        echo" neither <10 nor >60";
    }
    ?>





