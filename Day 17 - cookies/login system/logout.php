<?php




if($_COOKIE["user_loggedin"] === "1")

{

    setcookie("user_loggedin","",time()-3600);
    setcookie("user_loggedin","0",time()+(86400*30));
    header('location: login2.php');

}

else{

    header('location:login2.php');
}