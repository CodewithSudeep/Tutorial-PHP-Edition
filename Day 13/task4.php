<?php


// demonstrate the use following function
// 1. explode() to
// 2. implode()
// 3. count()
// 4. array_sum()
//explode()to split string into array 
//syntax explode(seperator,string,limit)
$str="im raj,raj is hero,he is nice,lovely";

 var_dump (explode(',',$str,1));
 echo"<br/>";
 var_dump(explode(',',$str));
 echo"<br/>";

 //implode
 //opp to explode
 $arr=array('you ','are','beautiful','can','i','kiss','you');
  echo implode(" ",$arr)."<br/>";
  echo implode("-",$arr)."<br/>";
  

  //count() count number of element in array
  $n=count($arr);
  echo " number of element =$n <br/>";

  //array_sum 
  //to add elemt of array
  $ar=array(5,9,12,0);
  echo"sum of elemt of array=". array_sum($ar);
  ?>
 
 

 
 
 
 
 
 
 
 

