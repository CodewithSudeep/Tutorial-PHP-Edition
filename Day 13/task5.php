<?php
// Google search about built in function header() and demonstarate the use
//header("Content-type:application/pdf");
//header("Content-Disposition:attachment;filename='downloaded.pdf'");
if(isset($_POST['submit'])){
    header("location:test.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    <form method="post" action='task5.php'>
    <button  name="submit">Next page</button>
    </form>
</body>
</html>