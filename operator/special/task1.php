<?php

//wap in php to make userdefined string_repeat function which, repeat the string

function string_multiply($str='',$n=0){
if($n==0){
    return $str;
}

$x='';
  for($i=0;$i<$n;$i++){
  $x.=$str;
}

  return $x;
}

 $a=  readline('Enter a string:');
$n=readline('How many times to be repeated:');
echo string_multiply($a,$n);