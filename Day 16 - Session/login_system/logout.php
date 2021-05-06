<?php


session_start();

if($_SESSION["user_loggedin"] === true)
{

    $_SESSION["user_loggedin"] = false;

    header('location: login.html');

}

else{

    header('location:login.html');
}