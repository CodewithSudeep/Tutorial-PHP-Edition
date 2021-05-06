<?php


//check if session is started
if(session_status()== 0){
    echo "Session  not started started";
}

//if yes then close the session

//if no then start the session
if(session_status()==1){
    session_start();
    echo "Session started";
}
//final check
if(session_status()== 2){
    echo "<br><br>Session already exists";
}

#0 – PHP_SESSION_DISABLED: Sessions are currently disabled.
#1 – PHP_SESSION_NONE: Sessions are enabled, but no session has been started.
#2 – PHP_SESSION_ACTIVE: Sessions are enabled and a session has been started.

?>