<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"/>
    Enter a Number:<input type="number" name="number"/>
    <input type="submit" value="submit"/>
    </form>
    <?php
#create a form which takes the number and checks if it is palindrome or not
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $num=$_POST["number"];
            $num_cpy=$num;
            $num2=0;
            if (empty($num))
            {
                echo "Give Number";
            }
            else{
            while ($num > 0)
                 {
                $num1=$num%10;
                $num2=$num2*10+$num1;
                $num=$num/10;
                 }
                 if($num2==$num_cpy)
                 {
                     echo "The number $num_cpy is Palindrome";
                 }
                 else
                 {
                     echo "The number $num_cpy is not palindrome";
                 }
                 }
        }

    ?>
</body>
</html>
