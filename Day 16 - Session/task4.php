<?php

//check if session is tarted

// if not started start the session

// if started put username="codewithsudeep" and password="PASSWORD" in session variable 
if(isset($_SESSION)==0)

{
session_start();

$_SESSION["username"]="codewithsudeep";

$_SESSION["password"]="password";

echo "Session created";
}
?>