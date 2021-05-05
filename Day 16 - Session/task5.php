<?php
//compare the username and password in session with USERNAME and PASSWORD and print different results
if(session_status() === PHP_SESSION_NONE){
session_start();
}

//checking username
if(isset($_SESSION['username']) && $_SESSION['username']=='USERNAME'){
    echo "Correct username<br/>";
}else{
    echo "Incorret username <br/>";
}

//checking password
if(isset($_SESSION['password']) && $_SESSION['password']=='PASSWORD'){
    echo "Correct password<br/>";
}else{
    echo "Incorret password <br/>";
}
?>