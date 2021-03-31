
<?php
# create a admission form having input feilds: 
# name, address, program, contact number


#submit the form using POST method on same page

# print the data submitted via form 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        echo"NAME:".$_POST['name'];
        echo"<br/>Addresss:".$_POST['address'];
        echo"<br/>program:".$_POST['program'];
        echo"<br/>contact no.:".$_POST['contact'];
    }
}
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
<form action="task3.php" method="post">
Name: <input type="text" name="name">
address: <input type="text"name="address">
program: <input type="text" name="program">
contact no: <input type="number" name="contact">
<input type="submit" value="submit" name="submit">

</form>
    
</body>
</html>