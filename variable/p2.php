<?php

//wap in php to empty
$x='';
var_dump($x);

echo PHP_EOL;
var_dump($x=='');
echo PHP_EOL;
var_dump($x=="");
echo PHP_EOL;
var_dump($x==="");
echo PHP_EOL;
var_dump($x==='');
echo PHP_EOL;
var_dump(empty($x));
echo PHP_EOL;
var_dump(empty(''));
echo PHP_EOL;
var_dump(empty(""));

$y="";
var_dump($y);
echo PHP_EOL;
var_dump($x==$y);
echo PHP_EOL;
var_dump($x===$y);

echo PHP_EOL;
echo '	Be aware B/W empty and "<space>"';
echo PHP_EOL;
printf("the value from empty :",'');
echo PHP_EOL;
printf("the value from empty space :",'');
echo PHP_EOL;
var_dump(''=='');
var_dump(''===' ');

echo PHP_EOL;
echo ' ';
echo PHP_EOL;
echo getType('');
echo PHP_EOL;
echo strlen('');
echo PHP_EOL;
echo ' ';
echo PHP_EOL;
echo getType(' ');
echo PHP_EOL;
echo strlen(' ');
echo PHP_EOL;
echo ord(''); //ascii
echo PHP_EOL;
echo ord('a');
?>