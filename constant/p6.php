<?php 

error_reporting(E_USER_NOTICE);
//error_reporting(E_NOTICE);
//wap in php to show difference b/w predefined error level and user-defined constants

printf("the value of true : %d\n",true);
printf("the value of true : %d\n",TRUE);
printf("true is Incase-sensitive constant : %d\n",(TRUE==1));

define('true',10,1);

printf("The value of true after redeclaration: %d\n",true);


?>