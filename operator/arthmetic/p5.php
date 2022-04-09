<?php

//wap in php to find the reminder without % operator
//using sprintf

$x=readline('Enter the x value:');
$y=readline('Enter the y value:');

$Q = $x/$y;
$A=sprintf("%d", $Q);
echo PHP_EOL;
$B=sprintf("%f", $Q);
echo PHP_EOL;
$C=sprintf("%.2f", $Q);
echo PHP_EOL;

echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;
echo $C;
echo PHP_EOL;
$rem = $x-($A*$Q);
echo $rem;