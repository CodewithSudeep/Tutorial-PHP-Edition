
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Username:<input type="text" name="username"/>
    Password:<input type="password" name="password"/>
    <input type="submit" value="submit"/> 
</form>
<?php


//make two variable for username and password

$username ="aadarsha"; //string
$password="password"; //string
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $form_username=$_POST["username"];
    $form_password=$_POST["password"];
    if($form_username==$username&& $form_password==$password)
    {
        echo"You are Logged in";
    }
    else
    {
        echo "Username/Password incorrect";
    }
}
# create a form wich takes username and password


#check the U/P provided through form matches with variables or not
?>
</body>
</html>