<?php

//wap in php to find the reminder without % operator
//in order to find: moduls,in php you have to use reminder theorem.
//Dividend = Dividor * Quoitient + R
//g(x)=f(x)*h(x)+R(x)

$x=readline('Enter the x value');
$y=readline('Enter the y value');

printf("The division = %d \n",$x/$y);
printf("The division = %f \n",$x/$y);

$rem1= $x % $y;
echo "The reminder using modulo operator = $rem1";

$Q = $x / $y;  //Qoutient
$rem2 = $x-($Q*$y);

echo PHP_EOL;

echo "The reminder using modulo operator = $rem2";

