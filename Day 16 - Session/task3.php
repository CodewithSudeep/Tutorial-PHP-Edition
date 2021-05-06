<?php

//check if session is started
//if yes then close the session
if (isset($_SESSION))
{

    echo "session destroyed";

session_unset();
session_destroy();
}
//if no then start the session



else{

session_start();
$_SESSION['name'] = "sarbendra";



}

//final check

if(isset($_SESSION))
{

echo $_SESSION['name'];


}