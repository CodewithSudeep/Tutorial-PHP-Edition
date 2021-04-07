<?php

 if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (isset($_POST['calculate']) && is_numeric($_POST['operand1']) && is_numeric($_POST['operand2'])){
        $operand1=$_POST["operand1"];
        $operand2=$_POST["operand2"];
        $operator=$_POST["operator"];
     
        switch($operator){
            case '+':
            $result= $operand1+$operand2;
            break;

             case '-':
                    $result= $operand1-$operand2;
                    break;

                    case '+-*':
                        $result= $operand1*$operand2;
                        break;

                        case '/':
                            $result= $operand1/$operand2;
                            break;

                            case '%':
                                $result= $operand1%$operand2;
                                break;

                                case '**':
                                    $result= $operand1**$operand2;
                                    break;

                                    default:
                                $result="not allowed";

        }
    
    }

 }
# PHP script for handling the form request

#first step
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # The request is using the POST method
    if (isset($_POST["calculate"]) && is_numeric($_POST["operand1"]) && is_numeric($_POST["operand2"])) {
        # checks if calculate button is set
        #second step
        $operand1 = $_POST["operand1"];
        $operand2 = $_POST["operand2"];
        $operator = $_POST["operator"];
        $result="";
        #final step
        switch ($operator) {
            case '+':
                $result = $operand1+$operand2;
                break;
            case '-':
                $result = $operand1-$operand2;
                break;
            case '*':
                $result = $operand1*$operand2;
                break;
            case '/':
                $result = $operand1/$operand2;
                break;
            case '%':
                $result = $operand1%$operand2;
                break;
            case '**':
                $result = $operand1**$operand2;
                 break;
            default:
               $result = "Operation not allowed";
                break;
        }

        if (is_numeric($result)) {
            $final = "$operand1".$operator."$operand2 = ".$result;
        }
        else{
            $final =$result;
        }
    }else{
        $final = "given operand is non numberic";
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
        <b><?php if(isset($result)){ echo "Result: ".$result; } ?></b><br/>
        Number A: <input type="number" name="operand1" required><br/>
        Number B: <input type="number" name="operand2" required><br/>
        Operator : <select name="operator" required>
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">MOD</option>
            <option value="**">Exponentiaal</option>
        </select><br/>
        <input type="submit" name="calculate" value="Calculate"><br/>
        </div>
    </form>
    </div>
</body>
</html>