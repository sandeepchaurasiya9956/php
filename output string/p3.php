<?php

//wap in php to show raw string

echo 'This is a simple Raw string';
echo PHP_EOL;
echo "This is a simple Processed string";
echo PHP_EOL;

//escape sequence
echo 'this is a \t tabbed \n line';
echo PHP_EOL;
echo "This is a \t tabbed  \n line";

//with variable
$name='Ravi';
$class='Btech';
$rollno=1001;

echo PHP_EOL;
echo 'name = $name, class=$class, rollno=$rollno, inside a single code';
echo PHP_EOL;
echo "name = $name, class=$class, rollno=$rollno, inside a double code";

?>