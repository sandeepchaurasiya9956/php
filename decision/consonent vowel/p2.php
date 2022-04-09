<?php

//wap in php to show chaining effect in switch

$n=readline("Enter the no. B/W 1 to 9:");
$i=1;
switch($n){
case 1:
   echo "case ".$i++." is executing \n";
   //goto exit_label;
   //return
   //exit
   break;
case 2:
   echo "case ".$i++."  is executing \n";
  break;
case 3:
   echo "case ".$i++."  is executing \n";
case 4:
   echo "case ".$i++."  is executing \n";
case 5:
   echo "case ".$i++."  is executing \n";
case 6:
   echo "case ".$i++."  is executing \n";
case 7:
   echo "case ".$i++."  is executing \n";

default:
 echo "default $n is executing \n";
}
//exit_label;
print('This is executing....');