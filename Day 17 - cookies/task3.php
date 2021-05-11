<?php

//debug
$array = [2,4,5];
$str=implode("",$array);
//implode convert array into string
setcookie("data", $str, time()+(3600 * 30));
if(isset($_COOKIE["data"])){
    echo "strig is".$_COOKIE["data"]."<br/>";
}

?>