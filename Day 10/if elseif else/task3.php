<?php

$base = 3;
$power = 4;

//find base to the power and check whether result is 
// 1. less than 10 or 
// 2. greater than 60
// 3. not 1 and 2
$result = pow($base, $power);
if($result < 10){
    echo "Result is less than 10";
}
elseif($result > 50){
    echo "Result is greater than 50";
}
else{
    echo "Result is greater than 10 and less than 50";
}

?>
