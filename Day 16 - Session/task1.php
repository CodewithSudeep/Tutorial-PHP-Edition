<?php
session_start();

// start a session and put your name in session variable with appropiate index

$_SESSION["name"]="Pradip Kunwar";

echo $_SESSION["name"];
?>