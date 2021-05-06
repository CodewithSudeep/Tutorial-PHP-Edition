<?php
session_start();   //session started

//compare the username and password in session with USERNAME and PASSWORD and print different results

if(isset($_SESSION)){
    if((isset($_SESSION["Username"])  && $_SESSION["Username"])=="USERNAME"){
        echo  "<br><br>Username:",$_SESSION["username"],"<br>";
    }
    else{
        echo "Incorrect username<br>";
    }

    if((isset($_SESSION["password"])  && $_SESSION["password"] )=="PASSWORD"){
        echo  "Password:",$_SESSION["password"];
    }
    else{
        echo "Incorrect passwrod";
    }
}



?>