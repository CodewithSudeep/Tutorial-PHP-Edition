<?php

# PHP script for handling the form request

#first step
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # The request is using the POST method
    $operand1 = $_POST["operand1"];
    $operand2 = isset($_POST['operand2'])?$_POST['operand2']:null;
    $operator = $_POST["operator"];
    $result="";
    $initial ="";
    $final ="";
    //simple calc
    if (isset($_POST["arithmetic"])) {
        #second step
        #final step
        if(is_numeric($_POST["operand1"]) && is_numeric($_POST["operand2"] )){
        switch ($operator) {
            case '+':
                $result = $operand1+$operand2;
                $initial = "$operand1+$operand2";
                break;
            case '-':
                $result = $operand1-$operand2;
                $initial="$operand1-$operand2";
                break;
            case '*':
                $result = $operand1*$operand2;
                $initial="$operand1*$operand2";
                break;
            case '/':
                if($operand2==0){
                    $result = "Math error!Number cannot be divided by zero";
                    $initial ="Error ";
                }else{
                $result = $operand1/$operand2;
                $initial="$operand1/$operand2";
                }
                break;
            case '%':
                $result = $operand1%$operand2;
                $initial="$operand1%$operand2";
                break;
            case '**':
                $result = $operand1**$operand2;
                $initial="$operand1^$operand2";
                 break;
            default:
               $result = "Operation not allowed"; 
               $initial ="Error  ";
                break;
        }
        if(isset($result)){
                $final = $initial." = ".$result;
        } else{
              $final ="Internal working error";
        }
    }else{
        $final = "Error : given operand is non numberic";
    }
}


// trigonometric
 if(isset($_POST['trignometric']) && is_numeric($_POST['operand1']) && is_numeric($_POST['operand2'])){
        switch($operator){
            case 'sin':
                $result = $operand1*sin(deg2rad($operand2));
                $initial ="$operand1".$operator."(".$operand2.")";
                break;
            case 'cos':
                $result = $operand1*cos(deg2rad($operand2));
                $initial ="$operand1".$operator."(".$operand2.")";
                break; 
            case 'tan':
                $result = $operand1*tan(deg2rad($operand2));
                $initial ="$operand1".$operator."(".$operand2.")";
                break; 
            default:
               $result = "Operation not allowed";
               $initial = "Error ";
        }
        if (isset($result)) {
            $final = $initial." = ".$result;
        }
        else{
            $final ="Internal working error";
        }
    }else{
        $final = "Error : Given operand is non numberic"; 
    }



//conversion
//check for conversion isset and numeric operand
if(isset($_POST['conversion']) && is_numeric($_POST['operand1'])){
        switch($operator){
            case 'bindec':
                $result = bindec($operand1);
                $initial ="(".$operand1.")<sub>2</sub> = (".$result.")<sub>10</sub>";
                break;
            case 'decbin':
                $result = decbin($operand1);
                $initial ="(".$operand1.")<sub>10</sub> = (".$result.")<sub>2</sub>";
                break;
            case 'dechex':
                $result = dechex($operand1);
                $initial ="(".$operand1.")<sub>10</sub> = (".$result.")<sub>16</sub>";
                break;
            case 'hexdec':
                $result = hexdec($operand1);
                $initial ="(".$operand1.")<sub>16</sub> = (".$result.")<sub>10</sub>";
                break;
            case 'decoct':
                $result = decoct($operand1);
                $initial ="(".$operand1.")<sub>10</sub> = (".$result.")<sub>8</sub>";
                break;
            case 'octdec':
                $result = octdec($operand1);
                $initial ="(".$operand1.")<sub>8</sub> = (".$result.")<sub>10</sub>";
                break;
            case 'deg2rad':
                $result = deg2rad($operand1);
                $initial ="(".$operand1.")<sub>deg</sub> = (".$result.")<sub>red</sub>";
                 break;
            case 'rad2deg':
                $result = rad2deg($operand1);
                $initial ="(".$operand1.")<sub>rad</sub> = (".$result.")<sub>deg</sub>";
                break;
        }
        if(isset($result)){
            $final =$initial;
        }else{
            $final ="Internal working error";
        }  
    }else{
        $final ="Error :Given operand is non numeric";
    }

//exponential
if(isset($_POST['logarithmic'])){
    # operand1= constant, operand2 is value of number of which natural log is to be find
    # operator have 3 string value for math functions: log,log10,exp
    if (is_numeric($operand1) && is_numeric($operand2)) {
        
        #final step
        switch ($operator) {
            case 'log':
                $result = $operand1*(log($operand2));
                $initial=$operand1."log<sub>e</sub>/ln(".$operand2.")";
                break;
            case 'log10':
                $result = $operand1*(log10($operand2));
                $initial=$operand1."log<sub>10</sub>(".$operand2.")";
                break;
            case 'exp':
                $result = $operand1*(exp($operand2));
                $initial=$operand1."e<sup>($operand2)</sup>";  //strtoupper() change string to uppercas
                break;
            default:
            $result = "Operation not allowed";
            $initial="Error";
                break;
        }

        if (isset($result)) {
            $final = $initial." = ".$result;
        }else{
            $final ="Internal working error";
        }
    
    }else{
        $final = "Error : Given operand is non numberic";
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
    <div class="topbar">
        <button id="simple">Arithmetic</button>
        <button id="trignometric">Trignometric</button>
        <button id="conversion">Conversion</button>
        <button id="log">Logarithmic</button>
    </div>
    <?php if(isset($final)){ ?>
    <span class="result">
        <b><?php echo $final; ?></b><br/>
    </span>
    <?php } ?>
    <div id="simplecalc">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
       
        Number A: <input type="text" name="operand1" required><br/>
        Number B: <input type="text" name="operand2" required><br/>
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
       
        Constant: <input type="text" name="operand1" required><br/>
        Angle (&theta;) : <input type="text" name="operand2" required><br/>
        Operator : <select name="operator" required>
            <option value="sin">sin&theta;</option>
            <option value="cos">cos&theta;</option>
            <option value="tan">tan&theta;</option>
        </select><br/>
        <input type="submit" name="trignometric" value="Calculate"><br/>
        </div>
    </form>
    </div>

    <div id="conversioncalc">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
        Number: <input type="text" name="operand1" required><br/>
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
       <p>xlog(y) OR xe<sup>y</sup></p>
        X: <input type="text" name="operand1" required><br/>
        Y: <input type="text" name="operand2" required><br/>
        Operator : <select name="operator" required>
            <option value="log">Natural log</option>
            <option value="log10">log10 - base-10 logarithm</option>
            <option value="exp">e<sup>y</sup> - exponent</option>
        </select><br/>
        <input type="submit" name="logarithmic" value="Calculate"><br/>
        </div>
    </form>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>