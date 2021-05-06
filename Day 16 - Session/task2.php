<?php


// check if session is started and have your name 
session_start();
echo "my name is ".$_SESSION["fname"]." ".$_SESSION["lname"];
?>