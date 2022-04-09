<?php
include_once __DIR__.'/setting.php';

$id=$_GET['id'];
mysqli_query($conn,"delete from san where id='$id'");
header('location:index.php');
die();
?>