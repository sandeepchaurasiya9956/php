<?php

//wap in php to show append operation in string

$name='Ravi';
$lname=' Kumar Singh';

$name=$name.$lname;
echo $name;

   echo PHP_EOL;
$name='Ravi';
$lname='Kumar Singh';
$name .=$lname;  //concate
echo $name;
echo PHP_EOL;
$name .=$lname;  //append
echo $name;