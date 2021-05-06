<?php

//check if session is started


//if yes then close the session


//if no then start the session

//final check
if(isset($_SESSION)){
    echo $_SESSION['name'];
    session_destroy();//sesion is closed
    echo"session is destroy";

}
else{
    session_start();
        $_SESSION['name']="raj tuladhar";
    }
    
    if(isset($_SESSION)){
        echo $_SESSION['name'];
    }

?>
