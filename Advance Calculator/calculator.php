<?php

# PHP script for handling the form request

#first step
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # The request is using the POST method
    if (isset($_POST["arithmetic"]) && is_numeric($_POST["operand1"]) && is_numeric($_POST["operand2"]))//for arthematic calculation
    {
        # checks if calculate button is set
        #second step
        $operand1 = $_POST["operand1"];
        $operand2 = $_POST["operand2"];
        $operator = $_POST["operator"];
        $result="";
        #final step
        if(is_string($operator))
        {
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
                if($operand2!=0)
                {
                $result = $operand1/$operand2;
                }
                else{
                    $result="Divided by zero gives Undefined";
                }
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
        }
        if (is_numeric($result)) {
            $final = "$operand1".$operator."$operand2 = ".$result;
        }
        else{
            $final =$result;
        }
    }
    elseif(isset($_POST["trignometric"]) && is_numeric($_POST["operand1"])&& is_numeric($_POST["operand2"]))
    {           //for trigonometric calculation
        $operand1=$_REQUEST["operand1"];
        $operand2=$_REQUEST["operand2"];
        $operand2_deg=deg2rad($_REQUEST["operand2"]);//convert radian to degree for calculation
        $operator=$_REQUEST["operator"];
        switch($operator)
        {
            case "sin":
                $result=$operand1*sin($operand2_deg);
                break;
            case "cos":
                $result=$operand1*cos($operand2_deg);
                break;
            case "tan":
                $result=$operand1*tan($operand2_deg);
                break;
            default:
                $result="Data Entry wrong";
                break;
        }
        if (is_numeric($result)) {
            $final = "$operand1".$operator."$operand2 = ".$result;
        }
        else{
            $final =$result;
        }

    }
    elseif(isset($_POST["conversion"]) && is_numeric($_POST["operand1"]))
    {           //for conversion calculation
        $operand1=$_REQUEST["operand1"];
        $operator=$_REQUEST["operator"]; 
        var_dump($_REQUEST);
        switch($operator)
        {
            case "bindec":
                $result=bindec($operand1);
                break;
            case "decbin":
                $result=decbin($operand1);
                break;
            case "dechex":
                $result=dechex($operand1);
                break;
            case "hexdec":
                $result=hexdec($operand1);
                break;
            case "decoct":
                $result=decoct($operand1);
                break;
            case "octdeg":
                $result=octdec($operand1);
                break;
            case "deg2rad":
                $result=deg2rad($operand1);
                break;
            case "rad2deg":
                $result=rad2deg($operand1);
                break;
            default:
            $result="Enter correct data";
        }
        if (is_numeric($result)) {
        $final = "$operand1"."($operator)=".$result;
        }
        else{
        $final =$result;
        }
    }
    elseif(isset($_POST["calculate"]) && is_numeric($_POST["operand1"]) && is_numeric($_POST["operand2"]))
        {  //for logramethic calculation
        $operand1=$_REQUEST["operand1"];
        $operand2=$_REQUEST["operand2"];
        $operator=$_REQUEST["operator"];
        switch($operator)
        {
            case"log":
                if($operand2>0)
                {
                    $result=$operand1*log($operand2);
                }
                else
                {
                    $result="Undefined!Y should be greater than zero";
                }
                break;
            case"log10":
                if($operand2>0)
                {
                        $result=$operand1*log10($operand2);
                }
                else
                {
                        $result="Undefined!Y should be greater than zero";
                }
                    break;
            case"exp":
                $result=$operand1*exp($operand2);
                break;
            default:
                $result="Enter correct data";
                break;
                
        }
        if (is_numeric($result)) {
            $final = "$operand1"."$operator"."$operand2=".$result;
            }
            else{
            $final =$result;
            }
        }
    else{
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
    <div class="topbar">
        <button id="simple">Arithmetic</button>
        <button id="trignometric">Trignometric</button>
        <button id="conversion">Conversion</button>
        <button id="log">Log</button>
    </div>
    <b><?php if(isset($final)){ echo "Result: ".$final; } ?></b><br/>

    <div id="simplecalc">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
       
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
        <input type="submit" name="arithmetic" value="Calculate"><br/>
        </div>
    </form>
    </div>

    <div id="trignometriccalc">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
       
        Constant: <input type="number" name="operand1" required><br/>
        Angle (&theta;) : <input type="number" name="operand2" required><br/>
        Operator : <select name="operator" required>
            <option value="sin">sin</option>
            <option value="cos">cos</option>
            <option value="tan">tan</option>
        </select><br/>
        <input type="submit" name="trignometric" value="Calculate"><br/>
        </div>
    </form>
    </div>

    <div id="conversioncalc">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
        Number: <input type="number" name="operand1" required><br/>
        Operator : <select name="operator" required>
            <option value="bindec">BIN-DEC</option>
            <option value="decbin">DEC-BIN</option>
            <option value="dechex">DEC-HEX</option>
            <option value="hexdec">HEX-DEC</option>
            <option value="decoct">DEC-OCT</option>
            <option value="octdec">OCT-DEC</option>
            <option value="deg2rad">DEG-RAD</option>
            <option value="rad2deg">RAD-DEG</option>

        </select><br/>
        <input type="submit" name="conversion" value="Calculate"><br/>
        </div>
    </form>
    </div>
    <div id="logcalc">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
       <p>xlog(y)</p>
        X: <input type="number" name="operand1" required><br/>
        Y: <input type="number" name="operand2" required><br/>
        Operator : <select name="operator" required>
            <option value="log">log</option>
            <option value="log10">log10</option>
            <option value="exp">e (exponent)</option>
        </select><br/>
        <input type="submit" name="calculate" value="Calculate"><br/>
        </div>
    </form>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>