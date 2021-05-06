<?php

//check if session is tarted
if(session_status()==1){
    session_start();
}
// if not started start the session

// if started put username="codewithsudeep" and password="PASSWORD" in session variable 
$_SESSION["Username"]="codewithsudeep";
$_SESSION["password"]="PASSWORD";
echo "Session variables are set";

?>
