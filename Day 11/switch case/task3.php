<?php

// create two int vars

$num1 = 25;
$num2 = 19;

// create an array of arithmetic operators (+,-,*,/,%,**)

$operators =array(); //array
$operators[]="-";
$operators[]="+";
$operators[]="*";
$operators[]="/";
$operators[]="%";
$operators[]="**";

//count the total items in $operators using count() function
echo count($operators);

$number_of_operators = count($operators);

// generate random number in range of 0 to $number_of_operators-1 using rand function

$random = rand(0,$number_of_operators-1);

// access a single item from array of operators for type of operation

$operator = $operators[$random];
//access array like indexed array where index is $random variable

// use switch case for arithmetic operations given by $operator
switch ($operator){
    case "-":
        echo "-";
        break;
        case "+":
        echo"+";
        break;
        case "*":
         echo"*";
        break;
        case "%":
        echo"%";
        break;
         case "/":
        echo"/";
         break;
        case "**":
         echo"**";
         break;
        default:
        echo "not ecist";
        
}




// print output

//output;


