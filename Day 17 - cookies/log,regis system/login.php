<?php
$error=array();
if($_POST["email"]==""){
    $error[]="email is required";
}
if($_POST["password"]==""){
    $error[]="password is required";
}
if(count($error)>0){
    foreach($error as $key=>$value){
        echo $value;
        echo "<br/>";
    }
   echo" <a href='loginpage.php'>login</a>";
   exit(0);
}
if($_POST['email']!==""&&$_POST['password']!==""){
    if($_COOKIE['user_email']!=$_POST['email']){
        echo "email not found!!";
        echo "<a href='loginpage.php'><button type='button'>try again</button></a>";
        echo "<a href='register.php'><button type='button'>register</button></a>";
        exit(0);
    }
    else{
        if($_COOKIE['user_password']!=$_POST['password']){
            echo"password incorrect";
            echo"<a href='loginpage.php'><button type='button'>tryagain</button></a>";
            echo"<a href='register.php'><button type='button'>register</button></a>";
            exit(0);
        }else{
            if(isset($_COOKIE['user_loggedin'])){
                setcookie("user_loggedin","",time()-3600,"/");
                setcookie("user_loggedin","1",time()+(86400*30),"/");

                header('location:index.php');
                //echo"you are logged in sucessfully";

        }
        else {
            setcookie("user_loggedin","1",time()+(86400*30),"/");
            header('location:index.php');
            
            
        }
    }
}
}
?>