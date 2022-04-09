<?php

//wap in php to find the Quarant according to given, Quadrant conditions

$x=readline('Enter the x value:');
$y=readline('Enter the y value:');

if($x>0 and $y>0)
      echo'1st Quadrant';


 else if($x>0 and $y<0)
      echo'4rth Quadrant';


else if($x<0 and $y>0)
      echo'2nd Quadrant';

else
    echo '3rd quadrant';