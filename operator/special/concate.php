<?php

//wap in php to string concatenation

$x='Life';
$y=' partner';

var_dump(getType($x));
var_dump(getType($y));
var_dump($x.$y);
var_dump(getType($x.$y));

  $x=10;
  $y=20;
var_dump($x.$y);
var_dump(getType($x.$y));

$result = 'The sum is = ';
echo $result.($x+$y);