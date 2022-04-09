<?php

//wap in php to show difference b/w raw and precessed in the combination

echo 'The line is \n single tabbed and "\t double" tapped.';
echo PHP_EOL;
echo "The line is \n single tabbed and '\t double' tapped.";

//with variable
echo PHP_EOL;
$a=100;
echo 'The value of $a id : "$a" ';
echo PHP_EOL;
echo "The value of $a is : '$a' ";

echo PHP_EOL;
echo 'The value of $a is : '.$a;
echo PHP_EOL;
echo 'The value of $a is : "'.$a.'"';
echo PHP_EOL;
echo 'The value of $a is : '."'$a'";

?>