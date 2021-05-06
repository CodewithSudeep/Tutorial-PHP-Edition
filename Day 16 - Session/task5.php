<?php


//compare the username and password in session with USERNAME and PASSWORD and print different results
 


if (!(isset($_SESSION)))
{

session_start();

}

if (isset($_SESSION['username']) && $_SESSION['username'] =="USERNAME" )
{

    echo $_SESSION['username'] . "<br/>";

}

else{


    echo "incorrect username <br/> ";
}



if(isset($_SESSION['password']) && $_SESSION['password'] == "PASSWOWRD"  )
{

    echo "log in successful <br/>";


}

else{

echo "incorrecct password <br/>";

}