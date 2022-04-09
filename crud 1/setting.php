<?php 

$conn=mysqli_connect(
    "localhost:3308",
    "root",
    "",
    "sandip"
);

$res=mysqli_query($conn,"select * from san");

?>

