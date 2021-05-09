<?php
if($_COOKIE['user_loggedin'] === "1"){
    setcookie("user_loggedin", "",time()-3600,"/");
    setcookie("user_email", "",time()-3600,"/");
    setcookie("user_name", "",time()-3600,"/");
    setcookie("user_password", "",time()-3600,"/"); //deletes the set cookie
    header('location:register.html');
}

?>