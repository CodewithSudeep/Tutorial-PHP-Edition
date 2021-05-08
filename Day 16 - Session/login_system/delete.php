<?php

session_start();

if($_SESSION["user_loggedin"] === true)
{

    session_destroy();

    echo "you accoount has been deleted please register again! <br/>";
    echo "<a href='register.html'>Register</a>"; 

}

else{

    header('location:login2.php');
}