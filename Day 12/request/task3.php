<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-handling</title>
    <style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    body{
        background-color:#ffffff;
    }
    h1{
        text-align:center;
        padding-top:10px;
    }
    form{
        width:325px;
        position:absolute;
        top:50px;
        left:25px;
        color:red;
    }
    #main{
        width:400px;
        height:300px;
        position:relative;
        top:250px;
        left:500px;
        border-radius: 45px;
        background: #ffffff;
        box-shadow:  10px 10px 20px #919191,
                   -10px -10px 20px #ffffff;
    }
    input[type="submit"]{
        margin-top:5px;
        background-color:black;
        color:white;
        height:25px;
        width:100px;
        border-radius:5px;
    }
    input[type="number"],input[type="text"]{
        width:100%;
        height:27px;
        outline:none;
        border:2px solid green;
        border-radius:5px;
    }
    input[type="submit"]:hover{
        background-color:green;
        color:white;
    }
    input[type="number"]:focus,input[type="text"]:focus{
        background-color:black;
        color:white;
    }
    #display{
        position:absolute;
        top:10px;
        left:10px;
        border:1px solid black;
        width:250px;
        height:150px;
    }

    </style>
</head>
<body>
<div id="main">
<h1>ADMISSION FORM</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="stdName">Name</label><br/>
<input type="text" name="stdName" id="stdName"  required></br>
<label for="address">Address</label><br/>
<input type="text" name="address" id="address" required><br/>
<label for="faculty">Program</label><br/>
<input type="text" id="faculty" name="faculty" required><br/>
<label for="contact">Contact Number</label><br/>
<input type="number" id="contact" name="contact" required><br/>
<input type="submit" name="submit">
</form>
</div>



<?php
 # create a admission form having input feilds: 
# name, address, program, contact number


#submit the form using POST method on same page

# print the data submitted via form 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  // var_dump($_REQUEST);
    if (isset($_REQUEST['submit'])){
     echo "<div id='display'>
    <h4>Students-details</h4>";
    echo "Student name : ".$_REQUEST['stdName']."</p>";
    echo "Address :".$_REQUEST['address']."</p>";
    echo "Program: ".$_REQUEST['faculty']."</p>";
    echo "contact-number :".$_REQUEST['contact']."</p>";
    echo "</div>";
    }
}
?>
</body>
</html>




<?php

?>