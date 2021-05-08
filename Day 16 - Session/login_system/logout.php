<?php


session_start();

if($_SESSION["user_loggedin"] === true)
{

    $_SESSION["user_loggedin"] = false;

    header('location: login2.php');

}

else{

    header('location:login2.php');
}