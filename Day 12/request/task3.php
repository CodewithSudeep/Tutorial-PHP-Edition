<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name      <input type="text" name="fname" ><br>
    Address   <input type="text" name="faddress"  ><br>
    Program   <input type="text" name="fprog" ><br>
    Contact.no<input type="number" name="fno" ><br>
    <input type="submit" name="submit">
    </form>
<?php
# create a admission form having input fields: 
# name, address, program, contact number

#submit the form using POST method on same page
# print the data submitted via form 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $a= $_REQUEST['fname'];
        $b=$_REQUEST['faddress'];
        $c=$_REQUEST['fprog'];
        $d=$_REQUEST['fno'];
        if (isset($_REQUEST['submit'])){
        echo "Student info:<br>";
        echo "Student name :",$a,"<br>";
        echo "Address :",$b,"<br>";
        echo "Program: ",$c,"<br>";
        echo "Contact.no :",$d,"<br>";
           }
    }
?>
</body>
</html>


