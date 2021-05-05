<?php
//check if session is started
//if yes then close the session
//if no then start the session


if(session_status() === PHP_SESSION_NONE ){
    echo "Session not started<br/>";
    session_start();
}else{
    echo "Session already started";
}
//final check
if(session_status() === 2){
    echo "Session successfully started";
}

//0 ----> PHP_SESSION_DISABLED if sessions are disabled.
//1 ----> PHP_SESSION_NONE if sessions are enabled, but none exists.
//2 ----> PHP_SESSION_ACTIVE if sessions are enabled, and one exists.

?>