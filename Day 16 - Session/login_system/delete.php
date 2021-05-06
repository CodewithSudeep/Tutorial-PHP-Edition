<?php

session_start();

if($_SESSION["user_loggedin"] === true)
{

    session_destroy();

    header('location: register.html');

}

else{

    header('location:login.html');
}