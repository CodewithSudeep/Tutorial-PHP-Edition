<?php
session_start();
if($_SESSION['user_loggedin']!=false){
     
    header('location:login.html');
}
?>