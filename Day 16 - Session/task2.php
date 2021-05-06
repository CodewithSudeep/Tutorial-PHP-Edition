<?php

if (session_status()==1){
    session_start();
    echo "Session  started";
}

// check if session is started and have your name 
if(isset($_SESSION["name"])){
echo "<br>Your name is ".$_SESSION["name"];
}
else{
    echo "Name not found";
}

?>