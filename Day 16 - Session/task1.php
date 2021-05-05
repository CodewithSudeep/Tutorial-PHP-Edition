<?php
// start a session and put your name in session variable with appropiate index
session_start();

$_SESSION['Username'] = "Bibek";


echo $_SESSION['Username'];

?>