<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//create an associative array with the following key and value
// name = yourname
// address = your address
// username = your username
// password = a password
// phone = your phone number
// email = your email.
<<<<<<< HEAD

=======
$info= array("Name"=>"",
"Name"=>"Pradip Kunwar",
"Address"=>"Ekantakuna,Lalitpur",
"Username"=>"Kun_Pradip",
"Password"=>"wx_7893st",
"Phone"=>"9813125888",
"Email"=>"pradipkunwar3332gmail.com"
);
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5

// print the element of array in HTML table

?>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Username</th>
<<<<<<< HEAD
        <th>password</th>
        <th>phone</th>
        <th>email</th>
    </tr>
    <tr>
        <th><?php echo "yourname from array" ?></th>
        <th></th> 
        <th></th>
        <th></th>
        <th></th>
        <th></th>
=======
        <th>Password</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <tr>
        <th><?php echo $info['Name'];  ?></th>
        <th><?php echo $info["Address"];   ?></th> 
        <th><?php echo $info["Username"];  ?></th>
        <th><?php echo $info["Password"];  ?></th>
        <th><?php echo $info["Phone"];  ?></th>
        <th><?php echo $info["Email"];  ?></th>
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
    </tr>
</table>
</body>
</html>