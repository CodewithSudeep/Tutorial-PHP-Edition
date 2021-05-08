<?php

//genrate a random number in range 45-70
// find the square of random number
$number = rand(45,70);
$square = $number**2;
//echo $square;
// store the result in cookie with expiry of one month
setcookie("square",$square,time()+(86400*30),"/");
if(!(isset($_COOKIE['square']))){
    echo "Cookie not set";
}else{
    echo "Cookie is set<br/>";
    echo "Cookie value: ".$_COOKIE['square'];
}
?>