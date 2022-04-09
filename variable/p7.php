<?php

//wap in php to boolean data types stored in variables

$x=true; //non case sensitive
echo $x;
echo PHP_EOL;
echo getType($x); //boolean
echo PHP_EOL;
var_dump($x);  //bool true

echo PHP_EOL;

$z=TRUE;
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($z);

$y=TrUe;
echo $y;
echo PHP_EOL;
echo getType($y);
echo PHP_EOL;
var_dump($y);

echo PHP_EOL;
echo 'on comparing all three values ';
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (True==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1===true);


echo PHP_EOL;
printf("The value of true in int :%d",true);
echo PHP_EOL;
printf("the vlue of true as a string : %s",true);
echo PHP_EOL;
printf("the value of 1 as a string : %s",1);
echo PHP_EOL;
printf("the value of 0 as a string : %s",0);
echo PHP_EOL;
printf("the value of bool false as a string : %s",json_encode(false));
echo PHP_EOL;
printf("the value of string as empty as string : %s",'');
echo PHP_EOL;
printf("the value of bool false as string : %s",false);
echo PHP_EOL;
printf("the value of bool false as string : %s",0);






?>