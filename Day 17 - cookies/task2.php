<?php

//genrate a random number in range 45-70

// find the square of random number


// store the result in cookie with expiry of one month
$num=rand(45,70);
echo $num."<br>";
$sqnum=$num**2;
setcookie("result",$sqnum,time()+(86400*30),"/");
if(!(isset($_COOKIE['result']))){

    echo "the value of cookie is not set";
}
else{
    echo"the value of cookie is ".$_COOKIE['result'];
    }


?>