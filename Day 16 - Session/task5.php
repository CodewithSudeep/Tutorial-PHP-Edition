<?php


//compare the username and password in session with USERNAME and PASSWORD and print different results
if(!(isset($_SESSION))){
    session_start();
}
if (isset($_SESSION['username'])&& $_SESSION['username']=="USERNAME"){
    echo $_SESSION['username']."<br/>";
}
else{
    echo"username incorrect<br/>";

}
if(isset($_SESSION['password'])&& $_SESSION['passwowrd']=="PASSWORD"){
    echo"logined";
}
else{
    echo"try again";
}
?>