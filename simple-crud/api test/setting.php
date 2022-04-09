<?php 
$conn=mysqli_connect("localhost:3308","root","","simple_crud");

$res=mysqli_query($conn,"select * from auth");

?>