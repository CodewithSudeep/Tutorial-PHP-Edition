<?php
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
echo "<a href = 'login2.php'>login</a>";
exit(0);

}

// if( $_SESSION["user_email"] == $_POST["email"] && $_SESSION["user_password"] == $_POST["password"])
// {

if( $_COOKIE["user_email"] != $_POST["email"])
{

    
echo "invalid email" . "  please register first <br/>";
echo "<a href='register.html'>Register</a>";
echo "<br/>". "Or login with different email <br/>";
echo "<a href='login2.php'>login</a>";
    exit(0);
}
else{
if( $_COOKIE["user_password"] != $_POST["password"])
{
    echo "incorrect password";
    exit(0);
}
else{
 // echo "you are logged in";
    // $_COOKIE["user_loggedin"] = true;
    if(isset($_COOKIE['user_loggedin'])){
        setcookie("user_loggedin", "",time()-3600);
        setcookie("user_loggedin","1",time()+(86400*30));
        header('location:index.php');
    }else{
        setcookie("user_loggedin","1",time()+(86400*30));
      header('location:index.php');
    }
}


}


// }

// if(isset($_COOKIE["user_loggedin"]))
// {
//     header('location:index.php');
// }