<?php
session_start();
// var_dump($_POST);

$error = array();

if($_POST['email']=="")
{

$error[] = "email is required";

}

if($_POST['password']=="")
{

$error[] = "password is required";

}

// error handling
if (count($error)>0)
{
foreach($error as $key => $value){

    echo $value . "<br/>";
}
echo "<a href = 'login.html'>login</a>";
exit(0);

}

// if( $_SESSION["user_email"] == $_POST["email"] && $_SESSION["user_password"] == $_POST["password"])
// {

if( $_SESSION["user_email"] != $_POST["email"])
{

    


echo "invalid email" . "  please register first <br/>";
echo "<a href='register.html'>Register</a>";
echo "<br/>". "Or login with different email <br/>";
echo "<a href='login.html'>login</a>";
    exit(0);
}
else{
if( $_SESSION["user_password"] != $_POST["password"])
{
    echo "incorrect password";
    exit(0);
}
else{

    echo "you are logged in";

    $_SESSION["user_loggedin"] = true;

}


}


// }

if($_SESSION["user_loggedin"] == true)
{
    header('location:index.php');
}