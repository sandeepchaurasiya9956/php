<?php 

//wap in php to find the reminder without % operator
//using type-casting


$x=readline('Enter the x value:');
$y=readline('Enter the y value:');

//$Q = intval($x/$y);
$Q = $x/$y;
echo getType($Q);
echo PHP_EOL;

echo $Q;
$rem = $x-($Q*$y);
echo PHP_EOL;
echo $rem;