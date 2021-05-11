<?php

// delete the cookie created in task3
setcookie("data","",time()-3600,"/");
if(!(isset($_COOKIE["data"]))){
    
    echo"cookie is deleted"."<br/>";
}

// update the cookie created in task1 by your name
setcookie("app_name","raj tuladhar",time()+3600,"/");
if((isset($_COOKIE["app_name"]))){
    echo"my name is ".$_COOKIE["app_name"]."<br/>";
}
?>