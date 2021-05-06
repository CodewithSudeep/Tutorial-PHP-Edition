<?php


//compare the username and password in session with USERNAME and PASSWORD and print different results
session_start();
if(isset($_SESSION))
{
    if($_SESSION["username"]=="codewithsudeep" && $_SESSION["password"]="password")
    {
        echo "You are logged in!!";

    }
    else
    {
        echo "incorrect Password";
    }
}
