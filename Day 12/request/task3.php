<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <label>Name:</label>
    <input type="text" name="name"> <br> <br>

    <label>Address:</label>
    <input type="text" name="address"> <br> <br>

    <label>Program:</label>
    <input type="text" name="program"> <br> <br>

    <label>Contact Number:</label>
    <input type="number" name="contact"> <br> <br>

    <input type="submit" name="submit"> <br> <br>
    </form>

</body>
</html>


<?php
# create a admission form having input feilds: 
# name, address, program, contact number


#submit the form using POST method on same page

# print the data submitted via form 

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $address = $_REQUEST['address'];
        $program = $_REQUEST['program'];
        $contact = $_REQUEST['contact'];
        echo "Name: ", $name . "<br>";
        echo "Address: ", $address . "<br>";
        echo "Program: ", $program . "<br>";
        echo "Cotact: ", $contact . "<br>";
    }
}


?>