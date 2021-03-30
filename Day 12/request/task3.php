<?php
# create a admission form having input feilds: 
# name, address, program, contact number


#submit the form using POST method on same page

# print the data submitted via form 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    Name:<input type="text" name="name"><br>
    address:<input type="text" name="address">
    Program:<input type="text" name="program"><br>
    Contact Number:<input type="text" name="contact"><br>
    <input type="submit" value="submit">
    </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $your_name=$_REQUEST["name"];
    $your_address=$_REQUEST["address"];
    $your_program=$_REQUEST["program"];
    $your_contact=$_REQUEST["contact"];
        if(isset($_REQUEST))
        {
            echo"Name:$your_name<br>";
            echo"Address:$your_address<br>";
            echo"Program:$your_program<br>";
            echo"Contact:$your_contact<br>";

        }
        else{

            echo" field are empty";
           
        }
}
?>
</body>
</html>
