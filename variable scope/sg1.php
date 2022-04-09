<?php

//wap in php to show super global variable

$GLOBALS['A']=100;
$GLOBALS['B']=200;

function display(){

echo $GLOBALS['A'];
echo PHP_EOL;
echo $GLOBALS['B'];

$A=$GLOBALS['A'];
$B=GLOBALS['B'];

echo PHP_EOL;
echo $A;
echo PHP_EOL;
echo $b;

global $A,$B;



}