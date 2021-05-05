<?php

// check if session is started and have your name
if (session_status() === 1) {  //checks if session is started or not - if not started starts the session
    session_start();
}
if(isset($_SESSION['Username'])){
echo "My name :".$_SESSION['Username'];
}else{
    echo "Not found";
}

//0 ----> PHP_SESSION_DISABLED if sessions are disabled.
//1 ----> PHP_SESSION_NONE if sessions are enabled, but none exists.
//2 ----> PHP_SESSION_ACTIVE if sessions are enabled, and one exists.
?>