<?php

if($_COOKIE["user_loggedin"] === "1")
{
    setcookie("user_loggedin","",time()-3600);
    setcookie("user_email","",time()-3600);
    setcookie("user_name", "",time()-3600);
    setcookie("user_password", "",time()-3600);

    echo "you accoount has been deleted please register again! <br/>";
    echo "<a href='register.html'>Register</a>"; 

}

// else{

//     header('location:login2.php');
// }