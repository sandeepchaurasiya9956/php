<?php

//wap in php to show the difference b/w null and undefined

$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
printf("The memory = %p",$x);
echo PHP_EOL;
printf("the memory x=%d",memory_get_usage($x));
unset($x);
printf("the memory x=%d",memory_get_usage($x));
echo PHP_EOL;
?>