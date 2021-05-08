<?php

//debug
$array =[2,4,5]; //is array
//echo implode("",$array);
//cookie only accepts string so converting array to string
setcookie("data",implode("",$array), time()+(3600 * 30));
if(isset($_COOKIE['data'])){
    echo "set";
}
?>