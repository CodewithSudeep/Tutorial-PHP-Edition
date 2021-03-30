<?php
# PHP script for handling the form request
if($_SERVER['REQUEST_METHOD']=="POST"){
 if(isset($_POST['calculate']) && is_numeric($_POST['operand1']) && is_numeric($_POST['operand2'])){
     $operand1 = $_POST['operand1'];
     $operand2 = $_POST['operand2'];
     $operator = $_POST['operator'];
 if($operator=='+'||$operator=='-'||$operator=='*'||$operator=='/'||$operator=='%'||$operator=='**'){
     switch ($operator) {
        case '+':
            $result = "The sum is ".$operand1+$operand2;
            break;
        case '-':
            $result = "The difference is ".$operand1-$operand2;
            break;
        case '*':
            $result ="The product is ".$operand1*$operand2;
            break;
        case '/':
            $result = "The dividand is ".$operand1/$operand2;
            break;
        case '%':
            $result = "The remainder is ".$operand1%$operand2;
            break;
        case '**':
            $result = $operand1**$operand2;
             break;
        default:
           $result = "Operation not allowed";
            break;
    }

 }else{
     $result = "Undefined operator";
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


     <style>
     
     
     
     body{
    margin: 0;
    padding: 0;
    max-height: 100vh;
}

.main{
    width: 50%;
    margin: 112px auto;
    line-height: 2;
    box-sizing: border-box;
    min-height: 50vh;
    border-radius: 17px;
background: linear-gradient(145deg, #d5d5d5, #fefefe);
box-shadow:  31px 31px 24px #d3d3d3,
             -31px -31px 24px #ffffff;
}

.form{
    padding: 20px;
    width: 100%;
}
.inputs{
    margin: 10px auto;
    padding: 10px;
}
input[type="number"]{
    height: 25px;
    width: 50%;
    border: none;
    padding: 5px;
    margin: 10px 0px;
}
select{
    height: 40px;
    width: 51%;
    border: none;
    padding: 5px;
    margin: 10px 8px;
}
input[type="submit"]{
    width: 30%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 30px auto;
    line-height: 3;
    padding: 1px;
    border: none;
    background: black;
    border-radius: 6px;
    color: white;
    font-size: 18px;
    cursor: pointer;
}</style>
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
            <option value="**">Exponentian</option>
        </select><br/>
        <input type="submit" name="calculate" value="Calculate"><br/>
        </div>
    </form>
    </div>
</body>
</html>