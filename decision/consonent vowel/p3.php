<?php

error_reporting(0);

//wap in php to show chaining effect in switch

$x=readline("Enter the x value:");

switch(@$x%2){
case 1:
   echo case "odd \n";
   
  case 0:
   echo case "even \n";
   

default:
 echo "default case \n";
}
