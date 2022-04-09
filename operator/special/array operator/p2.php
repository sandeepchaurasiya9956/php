<?php

//wap in php to +operation in Array with duplicate subscript

$x=[10,20,30,'Ravi'];

$y[0]='Doremon';
$y[1]=100;
$y[2 ]=200;

print_r($x);
print_r(count($x));
print_r($y);
print_r(count($x));
print_r($x + $y);  //$x.add($y)

print_r($y + $x);