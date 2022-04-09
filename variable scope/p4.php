<?php

//wap in php to show global scope defined from local scope

$a=10;
echo "The value pf a from global : $a";
echo PHP_EOL;

function test1(){
global $a;
global $b;
$b=30;
echo "The value of a from global inside tets1 : $a";
echo PHP_EOL;
echo "The value of a from local inside tets1 : $b";
echo PHP_EOL;
}

test1();
echo "The value of a from global inside tets2 : $b";
echo PHP_EOL;
$b=100;


function test2(){
global $a;
global $b;
echo "The value of a from global inside tetst2 : $a";
echo PHP_EOL;
echo "The value of b from local inside tetst2 : $b";

}

test2();