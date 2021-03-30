<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname"><br/>
  Last Name: <input type="text" name="lname"><br/>

  <input type="submit" name="submit">
</form>

<?php
#check if request method is post
# get the value of first name
#get the value of last name
#print first name and last name
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_REQUEST['submit'])){
    $first = $_REQUEST['fname'];
    $last = $_REQUEST['lname'];
    echo $first." ".$last;
  }
}

?>

</body>
</html>