<?php

//supress operator @: suprees operator or notice operator: error operator

$x=20;
echo "The value of x: $x";  //20

echo PHP_EOL;
echo "The value of y:".@$y;  //undefinef variable y

$z=10;
$z=isset($z)?$z:null;

echo PHP_EOL;
echo "The value of z using ternary:".$z;
   var_dump($z);
$z=isset($z)??null;
   echo PHP_EOL;
  echo "The value of z using nulllcoalescing:".$z;
var_dump($z);

$p=(5<2)??null;
echo PHP_EOL;
var_dump($p);

if($p){
  echo 'p if running by nulllcoalescing';
}else{
  echo 'p else running by ternary';
}

$p=(5<2)?'':null;
echo PHP_EOL;
var_dump($p);
   
  if($p){
  echo 'p if running by ternary';
}else{
  echo 'p else running by ternary';
}
