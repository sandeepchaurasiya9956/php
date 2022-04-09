<?php

//wap in php to show odd and even using default case in switch

$x = readline("Enter the x value:");
switch($x%2){  //S(remainder)={0,1}T(cases)=2  1-->default (n-1)--->case

case 0;
   echo "$x is even";
break;
 
case 1;
      echo "$x is odd";

break;

}