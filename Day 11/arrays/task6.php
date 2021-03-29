<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    
<?php
//create an associative array with the following key and value
// name = yourname
// address = your address
// username = your username
// password = a password
// phone = your phone number
// email = your email.

$my_details=array("name"=>"saksham kadayat","address"=>"santinagar","username"=>"saks009","password"=>"jhus123456","phone"=>"+9779865630599","email"=>"sakshamkadayat@gmail.com");
// print the element of array in HTML table

?>
<table >
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Username</th>
        <th>password</th>
        <th>phone</th>
        <th>email</th>
    </tr>
    <tr>
    <th><?php echo $my_details["name"] ?></th>
        <th><?php echo $my_details["address"] ?></th> 
        <th><?php echo $my_details["username"] ?></th>
        <th><?php echo $my_details["password"] ?></th>
        <th><?php echo$my_details["phone"] ?></th>
        <th><?php echo $my_details["email"] ?></th>
    </tr>
</table>
</body>
</html>