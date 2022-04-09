<?php 

//wap in php to show Modify operators

$x=10;
$x=$x+1;
echo "The value of x without Assignment operator:$x \n";

$x=10;
$x+=1;
echo "The value of x without Assignment operator:$x \n";

$x=10;
$z=$x++;
echo "The value of x without Post increment operator:$x and $z \n";

$x=10;
$z=++$x;
echo "The value of x without Pre increment operator:$x and $z \n";