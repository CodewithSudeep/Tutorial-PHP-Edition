<?php

// delete the cookie created in task3

// update the cookie created in task1 by your name
// set the expiration date to one hour ago
setcookie("data", "",time()-3600);
if(!isset($_COOKIE['data'])){
 echo "cookie deleted<br/>";
}
setcookie("app_name", "",time()-3600);
setcookie("app_name","Bibek",time()+3600);
echo $_COOKIE['app_name'];