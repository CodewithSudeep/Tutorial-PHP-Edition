<?php


// check if session is started and have your name 

if (isset($_SESSION)){



echo $_SESSION['name'];



}

else{

session_start();

if(isset($_SESSION['name']))
{
    echo  $_SESSION['name'];
}
else{

    echo "error";
}

}
?>