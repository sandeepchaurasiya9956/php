<?php

//wap in php to show super global variable

$a=20;
$b=30;

print_r($GLOBALS);

function display(){
$a =100;  //local
$b =200;  //local

echo PHP_EOL;
echo "The value of a from local : $a";
echo PHP_EOL;
echo "The value of b from local : $b";

echo PHP_EOL;
echo "The value of a from global using SG: {$GLOBALS['a']}";
echo PHP_EOL;
echo "The value of b from global using SG: {$GLOBALS['b']}";

$a = $GLOBALS['a'];  //without using global keyword
$b = $GLOBALS['b'];

echo PHP_EOL;
echo "The value of a from global without global keyword: $a";
echo PHP_EOL;
echo "The value of b from global without global keyword: $b";

echo PHP_EOL;

global $a,$b;  //using global keyword
echo PHP_EOL;

echo "The value of a from global with using gloal keyword : $a ";   //10
echo PHP_EOL;
echo "The value of a from global with using gloal keyword : $b ";   //20
echo PHP_EOL;
}

display();