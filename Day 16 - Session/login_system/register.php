

<?php

session_start();
$error = array();

if($_POST['email']=="")
{

$error[] = "email is required";

}

if($_POST['name']=="")
{

$error[] = "name is required";

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
echo "<a href = 'register.html'>Register</a>";
exit(0);

}

if($_POST['email']!=="" && $_POST['name']!=="" && $_POST['password']!=="")
{
    $_SESSION["user_email"] = $_POST["email"];
    $_SESSION["user_name"] = $_POST["name"];
    $_SESSION["user_password"] = $_POST["password"];
    echo "Registration successful <br/> please login with your username and password <br/>";
    echo "<a href = 'login2.php'>login</a>";
    
}







?>