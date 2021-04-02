<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
   Username <input type="text" name="_username"><br>
   Password <input type="password" name="_password" ><br>
   <input type="submit" name="submit" id="">
   </form> 



<?php
//make two variable for username and password
$username ="Yazukki_ku "; //string
$password="2srfnf@_46"; //string
# create a form wich takes username and password
#check the U/P provided through form matches with variables or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $user=$_REQUEST['_username'];
        $pw=$_REQUEST['_password'];
        if($username==$user && $password==$pw){
            echo "Username and password is correct";
        }else{
            echo "Wrong username or password";
        }
    }
}

?>

</body>
</html>
