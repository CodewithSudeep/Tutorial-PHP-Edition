<?php

// delete the cookie created in task3
setcookie("data","",time()- 3600);
if (isset($_COOKIE["data"]))
{

    echo "cookie not deleted <br/>"; 
}

// update the cookie created in task1 by your name

setcookie("app_name","",time()-3600);
setcookie("app_name","sarbendra",time()+(86400*10),"/");
echo $_COOKIE["app_name"];
?>