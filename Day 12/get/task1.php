<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit" name="submit">
</form>

<?php

#DEBUG

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  if(isset($_GET['fname'])){
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
}
?>

</body>
</html>