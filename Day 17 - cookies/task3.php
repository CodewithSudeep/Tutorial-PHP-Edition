<?php

//debug
$aray = [2,4,5];

setcookie("data",implode("",$aray), time()+(3600 * 30),);



echo $_COOKIE["data"]; 
?>