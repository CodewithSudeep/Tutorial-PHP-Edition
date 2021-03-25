<?php


$x= 5;
$y = 3;

//find the product and check whether the result is 
// 1. greater than 100 or is even number 
// 2. less than 20 and is even number
// 3. identical to 15 and is less than 19 
// 4. not 1, 2 and 3
$result=$x*$y;
echo $result;
echo"<br/>";
$r=$result/2;
if($result >"100" || $r="0"){
    echo $result,"is greater than 100 and is even number";

}elseif($result<"20" && $r="0"){
    echo  $result," is less than 20 and even";
}elseif($result==="15"&&$result< "19"){
    echo $result,"identical to 15 and is less than 19";
}else{
    echo"none";
}
?>



