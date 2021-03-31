<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname">
  Last Name: <input type="text" name="lname">

  <input type="submit" name="submit"> <br> <br>
</form>

<?php

#check if request method is post

# get the value of first name

#get the value of last name

#print first name and last name

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_REQUEST['submit'])){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    echo $fname ." ". $lname;
  }
}

?>

</body>
</html>