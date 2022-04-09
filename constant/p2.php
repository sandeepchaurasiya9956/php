<?php

//wap in to case sensitive constants

define('gravity',10);  //lowercase
define('GRAVITY',9.8); //uppercase
define('Gravity','free fall');  //capatalise
define('GrAvItY','this is gravity');  //mixed

echo gravity;
echo PHP_EOL;

echo GRAVITY;
echo PHP_EOL;

echo Gravity;
echo PHP_EOL;

echo GrAvItY;
echo PHP_EOL;

?>