<?php

// delete the cookie created in task3
setcookie("data","",time()-3600);
if(!(isset($_COOKIE["data"])))
{
    echo "Cookie deleted<br>";
}
// update the cookie created in task1 by your name
setcookie("app_name","random app",time()+(86400 * 10), "/");
setcookie("app_name","Aadarsha",time()+(86400 * 10), "/");
echo $_COOKIE["app_name"];

