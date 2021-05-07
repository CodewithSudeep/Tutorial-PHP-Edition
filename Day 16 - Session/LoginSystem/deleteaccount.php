
<?php

session_start();
if($_SESSION['user_loggedin']==true){
    session_destroy();    //destroys all created session variables
    header('location:register.html');
}else{
    header('location:register.html');
}
?> 