<?php

//genrate a random number in range 45-70
$ranm_num=random_int(45,70);
$ranm_num**=2;
// find the square of random number
$cookie_num=$ranm_num;
// store the result in cookie with expiry of one month
setcookie("square",$ranm_num,time()+(86400*30),"/");

if(isset($_COOKIE["square"]))
{
    echo"<h4>Cookie is set</h4>";
    echo "Square of random number:".$cookie_num;
}
else
{
    echo"cookie is not set";
}
?>
