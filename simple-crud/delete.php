<?php 
include __DIR__.'/dbconnect.php';
$id=$_GET['id'];
mysqli_query($conn,"delete from crud where id='$id'");
header('location:show.php');
die();
?>