<?php

//wap in php to show nullable datatype

$x=null; //it dose not exist at_all
echo PHP_EOL;
var_dump($x);
echo getType($x);
echo PHP_EOL;
var_dump(is_null($x));
var_dump(empty($x));
var_dump($x==null);
var_dump($x===null);
var_dump(''==null);
var_dump(''===null);

//echo 'vary vary important'
echo PHP_EOL;
$y='';
var_dump($y);
var_dump(isset($x));
?>