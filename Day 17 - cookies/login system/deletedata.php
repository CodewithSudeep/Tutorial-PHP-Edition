<?php


if($_COOKIE['user_loggin']=="1"){
    setcookie("user_loggin","",time()-3600,"/");
    setcookie("user_email","",time()-3600,"/");
    setcookie("user_name","",time()-3600,"/");
    setcookie("user_passoword","",time()-3600,"/");
    header('location:register.html');
}
?>