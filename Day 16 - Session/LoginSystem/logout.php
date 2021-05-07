<?php
session_start();
if($_SESSION['user_loggedin']===true){
    $_SESSION['user_loggedin'] = false ;  //for logout sets user logged un to false
    header('location:loginpage.php');
}else{
    header('location:loginpage.php');
} 