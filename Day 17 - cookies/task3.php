<?php

//debug
$array = [2,4,5];
$array_str_conv=implode(",",$array);

setcookie("data",$array_str_conv, time()+(3600 * 30));
if((isset($_COOKIE["data"])))
{
    echo " Cookie is set<br>";
    echo $array_str_conv;
    
}
?>