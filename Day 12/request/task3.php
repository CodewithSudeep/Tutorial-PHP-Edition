<?php
# create a admission form having input feilds: 
# name, address, program, contact number


#submit the form using POST method on same page

# print the data submitted via form 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name: <input type="text" name="fname"><br>
Address: <input type="text" name="faddress"><br>
Program: <input type="text" name="fprogram"><br>
Contact Number: <input type="text" name="fcontact"><br>
<input type="submit" name="submit">


</form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["fname"];
    $address = $_POST["faddress"];
    $program =  $_POST["fprogram"];
    $contact = $_POST["fcontact"]; 
    if(isset($_POST["submit"])){

        echo $name;
        echo "<br/>";
        echo $address;
        echo "<br/>";
        echo $program;
        echo "<br/>";
        echo $contact;
    }
}
?>