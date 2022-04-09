<?php

//wap in php to show core php file

echo 'This line from core php file';
echo PHP_EOL;

 function test()
{
  echo 'this is function from core php file';
echo PHP_EOL;
}
test();

class test{
public function display(){
  echo 'This is display method frommtest class 
from core php file';
echo PHP_EOL;
}
}

$test = new test();
$test->display();

echo '<h1> This is html heading tags</h1>';

//optional closing
?>