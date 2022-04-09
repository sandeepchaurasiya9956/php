<?php
//wap in php to show boolean stored in variable

$x=false;
echo $x; //nothing
echo PHP_EOL;
echo getType($x); //boolean
echo PHP_EOL;
var_dump($x); //bool(false)
echo PHP_EOL;
echo json_encode($x);  //raw format

echo PHP_EOL;
echo 'On comparing the values:';
echo (false==false);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump (0==FALSE);
echo PHP_EOL;
var_dump(0==false); //type is optional match content
echo PHP_EOL;
var_dump(0==(int)false);//implicit type converstion //php dynamic
echo PHP_EOL;
var_dump(0===false);  //content match and type match = false



?>