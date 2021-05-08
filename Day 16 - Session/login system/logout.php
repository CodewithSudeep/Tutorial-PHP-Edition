<?php 
session_start();

if($_SESSION["user_logged_in"]!=false){
    header("location:loginpage.php");
}

?>