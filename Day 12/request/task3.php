<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST["submit"])){
        echo"NAME:".$_POST['name'];
        echo"<br/>Addresss:".$_POST['address'];
        echo"<br/> program:".$_POST['program'];
        echo"<br/>contact number:".$_POST['contact'];
    }
}
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
    <title>admission formt</title>
</head>
<body>
    <form action="task3.php" method="POST">
    name: <input type="text" name="name">
    address: <input type="text" name="address">
    program: <input type="text" name="program">
    contact number: <input type="text" name="contact">
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>