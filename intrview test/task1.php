<?php 
$number=readline ("enter any num:");
$n=$number;
$rev=0;
while($number !=0){

$rev = $rev*10 + $number % 10;
$number = (int)($number/10);
    //echo PHP_EOL;
}
if($rev==$n){
  echo $n.' is polindrome';
}else{
   echo 'number is not polindrome';
}

?>