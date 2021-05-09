<?php

if($_COOKIE['user_loggin'] == "1"){
    
     setcookie("user_loggin", "",time()-3600,"/");
     setcookie("user_loggin", "0",time()+86400*30,"/");
     header('location:loggin.php');
 }
?>