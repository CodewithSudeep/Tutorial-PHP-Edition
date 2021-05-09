<?php 

if($_COOKIE['user_loggedin'] === "1"){
   // setcookie('user_loggedin',"0");
    setcookie("user_loggedin", "",time()-3600,"/");  //first delete the cookie and update
    setcookie("user_loggedin","0",strtotime('+30 days'),"/");
    header('location:login.php');
}else{
    header('location:login.php');
}
?>