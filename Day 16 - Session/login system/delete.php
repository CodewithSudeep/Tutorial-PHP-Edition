<?php 
session_start();

if($_SESSION["user_logged_in"]!=false){
    session_destroy();
    header("location:register.html");
}
else{
    header("location:register.html");
}

?>