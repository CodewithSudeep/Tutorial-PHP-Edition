<?php

//check if session is started

if(isset($_SESSION))
{
    //if yes then close the session
session_destroy();
echo"started session closed";

}
else{
    //if no then start the session
    session_start();
echo"started session";

}

?>


