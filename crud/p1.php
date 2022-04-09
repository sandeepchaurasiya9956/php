<?php

//wap in php to show foreach array

$data=[

[
  'id'=>'1',
  'name'=>'ravi',
    'class'=>'12th'
],
[
  'id'=>'2',
  'name'=>'prakash',
    'class'=>'diploma'
],
[
  'id'=>'3',
  'name'=>'ravi',
    'class'=>'12th'
],
];
foreach($data as $user){

echo "------------------\n ";
echo "user id ={$user['id']} \n";
echo "user name ={$user['name']} \n";
echo "user class ={$user['class']} \n";
echo "--------------------------\n ";


}