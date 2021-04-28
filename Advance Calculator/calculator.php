<?php

# PHP script for handling the form request

<<<<<<< HEAD
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
=======
#checking for post request
if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $operand1 = $_POST["operand1"];
    $operand2 = (isset($_POST["operand2"])) ? $_POST["operand2"] : null;
    $operator = $_POST["operator"];
    $raw="";
    $result="";
    
    # checking the type of operation

    #  arithmetic operation
    if (isset($_POST["arithmetic"])) {
        
        # for arithmetic operation
        if (is_numeric($operand1) && is_numeric($operand2)) {
        
            #final step
            switch ($operator) {
                case '+':
                    $result = $operand1+$operand2;
                    $raw="$operand1+$operand2";
                    break;
                case '-':
                    $result = $operand1-$operand2;
                    $raw="$operand1-$operand2";
                    break;
                case '*':
                    $result = $operand1*$operand2;
                    $raw="$operand1*$operand2";
                    break;
                case '/':
                    //handling "division by zero" error
                    if ($operand2>0) {
                        $result = $operand1/$operand2;
                        $raw="$operand1/$operand2";
                    }else{
                        $raw="Error ";
                        $result="Math Error";
                    }
                    break;
                case '%':
                    $result = $operand1%$operand2;
                    $raw="$operand1%$operand2";
                    break;
                case '**':
                    $result = $operand1**$operand2;
                    $raw="$operand1^$operand2";
                     break;
                default:
                   $result = "Operation not allowed";
                   $row="Error";
                    break;
            }
    
            if ($result) {
                $final = "$raw = ".$result;
            }
           
        }else{
            $final = "Error : Given operand is non numberic";
>>>>>>> e59e54fb49b3b395a5e6c00f89cb150862072932
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

<<<<<<< HEAD
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
=======
    #  trignometric operation
    if (isset($_POST["trignometric"])) {
        #in case of trignometric function oprand1 is treated as contant, operand2 is value of radian
        # operator have 3 string value for math functions: sin,cos,tan
        if (is_numeric($operand1) && is_numeric($operand2)) {
            // changing value into radian
            $operand2_angle= deg2rad($operand2);
            #final step
            switch ($operator) {
                case 'sin':
                    $result = $operand1*(sin($operand2_angle)); //math function sin(radianvalue);
                    $raw=$operand1."sin(".$operand2.")";
                    break;
                case 'cos':
                    $result = $operand1*(cos($operand2_angle));
                    $raw=$operand1."cos(".$operand2.")";
                    break;
                case 'tan':
                    $result = $operand1*(tan($operand2_angle));
                    $raw=$operand1."tan(".$operand2.")";
                    break;
                default:
                $result = "Operation not allowed";
                $row="Error";
                    break;
            }

            if ($result) {
                $final = "$raw = ".$result;
            }
        
        }else{
            $final = "Error : Given operand is non numberic";
>>>>>>> e59e54fb49b3b395a5e6c00f89cb150862072932
        }
    }
<<<<<<< HEAD
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
=======

    #  conversion operation

    if (isset($_POST["conversion"])) {
        #in case of cenversion operation oprand1 is treated as number
        # operator have total 8 string value for math functions: [mention them]
        if (is_numeric($operand1)) {
        
            #final step
            switch ($operator) {
                case 'bindec':
                    
                    $result = bindec($operand1);
                    $raw="(".$operand1.")<sub>2</sub> = (". $result .")<sub>10</sub>";
                    break;
                case 'decbin':
                    $result = decbin($operand1);
                    $raw="(".$operand1.")<sub>10</sub> = (". $result .")<sub>2</sub>";
                    break;
                case 'dechex':
                    $result = dechex($operand1);
                    $raw="(".$operand1.")<sub>10</sub> = (". $result .")<sub>16</sub>";
                    break;
                case 'hexdec':
                    $result = hexdec($operand1);
                    $raw="(".$operand1.")<sub>16</sub> = (". $result .")<sub>10</sub>";
                    break;
                case 'decoct':
                    $result = decoct($operand1);
                    $raw="(".$operand1.")<sub>10</sub> = (". $result .")<sub>8</sub>";
                    break;
                case 'octdec':
                    $result = octdec($operand1);
                    $raw="(".$operand1.")<sub>8</sub> = (". $result .")<sub>10</sub>";
                    break;
                case 'rad2deg':
                    $result = rad2deg($operand1);
                    $raw="(".$operand1.")<sub>radian</sub> = (". $result .")<sub>degree</sub>";
                    break;
                case 'deg2rad':
                    $result = deg2rad($operand1);
                    $raw="(".$operand1.")<sub>degree</sub> = (". $result .")<sub>radian</sub>";
>>>>>>> e59e54fb49b3b395a5e6c00f89cb150862072932
                    break;
            case"exp":
                $result=$operand1*exp($operand2);
                break;
            default:
                $result="Enter correct data";
                break;
                
        }
<<<<<<< HEAD
        if (is_numeric($result)) {
            $final = "$operand1"."$operator"."$operand2=".$result;
=======
    }

    #  logarithmic operation

    if (isset($_POST["logarithmic"])) {
        #in case of logarithmic operation oprand1 is treated as contant, operand2 is value of number of which natural log is to be find
        # operator have 3 string value for math functions: log,log10,exp
        if (is_numeric($operand1) && is_numeric($operand2)) {
            
            #final step
            switch ($operator) {
                case 'log':
                    $result = $operand1*(log($operand2));
                    $raw=$operand1."log(".$operand2.")";
                    break;
                case 'log10':
                    $result = $operand1*(log10($operand2));
                    $raw=$operand1."log10(".$operand2.")";
                    break;
                case 'exp':
                    $result = $operand1*(exp($operand2));
                    $raw=$operand1."x".strtoupper($operand2)."<sup>e</sup>";
                    break;
                default:
                $result = "Operation not allowed";
                $row="Error";
                    break;
>>>>>>> e59e54fb49b3b395a5e6c00f89cb150862072932
            }
            else{
            $final =$result;
            }
        }
    else{
        $final = "given operand is non numberic";
        }
}

<<<<<<< HEAD
=======

>>>>>>> e59e54fb49b3b395a5e6c00f89cb150862072932
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