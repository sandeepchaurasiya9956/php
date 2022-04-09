<?php

//wap in php to + operation in array with duplicate subscript

$x=[10,20,30,40];
$y[0]=100;
$y[1]=200;
$y[2]=300;
$y[3]=400;

echo "The count of x ".count($x);
echo PHP_EOL;
echo "The count of y ".count($y);
echo PHP_EOL;

var_dump(count($x)==count($y));
print_r($x);
print_r($y);


print_r($x+$y); //$x.add($y)
print_r($y+$x); //$y.add($x)

var_dump(($x+$y)==($y+$x));  //equal
var_dump(($x+$y)!=($y+$x));  //equal not identical

var_dump(($x+$y)===($y+$x));


var_dump(($x+$y)==($x)); //equal 
var_dump(($y+$x)===($x)); //equal and identical

var_dump(($y+$x)==($y)); //equal 
var_dump(($x+$y)===($y)); //equal and identical




