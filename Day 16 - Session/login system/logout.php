<?php
session_start();
if($_SESSION['user_loggedin']!=false){
     //for logout sets user logged un to false
    header('location:login.html');
}
?>