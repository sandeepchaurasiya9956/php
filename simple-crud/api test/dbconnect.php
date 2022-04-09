<?php
include __DIR__.'/setting.php';
$title=$_POST['title'];
$description=$_POST['description'];
$sql="insert into auth(title,description) values('$title','$description')";

$result = mysqli_query($conn,$sql);

if($result==1){
    $response = array("status"=>"1","message"=>"Data Inserted Successfully");
}else{
    $response = array("status"=>"0","message"=>"Data not Inserted");
}
echo json_encode($response);
?>