<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';
require_once __DIR__.'/rowcount.php';

#step2 : prepare the Query

$name = readline('Enter name:');
$email = readline('Enter email:');

$sql = "INSERT INTO emp(name,email) values('{$name}','{$email}');";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Record Inserted with pk = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}
