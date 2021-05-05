<?php
//check if session is tarted
// if not started start the session
// if started put username="codewithsudeep" and password="PASSWORD" in session variable 

if(session_status() === 1){
    session_start();
}
$_SESSION['username'] = "codewithsudeep";
$_SESSION['password'] = "PASSWORD";
echo "Session varibales set";


//0 ----> PHP_SESSION_DISABLED if sessions are disabled.
//1 ----> PHP_SESSION_NONE if sessions are enabled, but none exists.
//2 ----> PHP_SESSION_ACTIVE if sessions are enabled, and one exists.

?>