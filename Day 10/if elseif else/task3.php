<?php
//find base to the power and check whether result is 
// 1. less than 10 or 
// 2. greater than 60
// 3. not 1 and 2
$base = 3;
$power = 4;
$result=$base**$power;
if ($result<10) {
    echo "Less than 10";
}
elseif($result>60){
    echo "Greater than 10";
}
else{
    echo "Not 1 and 2";
}
?>




