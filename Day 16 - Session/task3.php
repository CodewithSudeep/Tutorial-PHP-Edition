<?php
session_start();

//check if session is started


//if yes then close the session


//if no then start the session

//final check

if(isset($_SESSION))
{
    
session_destroy();
echo"started session closed";

}
else{
  
    session_start();
echo"started session";

}

?>