<?php
# PHP script for handling the form request   
if($_SERVER['REQUEST_METHOD']==="POST"){
    if( isset($_POST['calculate']) && is_numeric($_POST['operand1']) && is_numeric($_POST['operand2']) ){
        $op1=$_POST['operand1'];
        $op2=$_POST['operand2'];
        $operator=$_POST['op'];
        if(is_string($operator)){
            switch($operator){
                case '+':
                    $result=$op1 + $op2;
                    echo "$op1 $operator $op2 = ",$result;
                    break;
                case '-':
                    $result=$op1 - $op2;
                    echo "$op1 $operator $op2 = ",$result;
                    break;
                case '*':
                    $result=$op1 * $op2;
                    echo "$op1 $operator $op2 = ",$result;
                    break;
                case '/':
                    $result=$op1 / $op2;
                    echo "$op1 $operator $op2 = ",$result;
                    break;
                case '%':
                    $result=$op1 % $op2;
                    echo "$op1 $operator $op2 = ",$result;
                    break;
                case '**':
                    $result=$op1 ** $op2;
                    echo "$op1 $operator $op2 = ",$result;
                    break;  
                 default:
                    echo "invalid operator";   
            }
        }
        

    }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="main">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
        Number A: <input type="number" name="operand1" required><br/>
        Number B: <input type="number" name="operand2" required><br/>
        Operator : <select name="op" required>
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">MOD</option>
            <option value="**">Exponentian</option>
        </select><br/>
        <input type="submit" name="calculate" value="Calculate"><br/>
        </div>
    </form>
    </div>


</body>
</html>

