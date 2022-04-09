<?php 

$conn=mysqli_connect('localhost:3308','root','','crud')
if(isset($_post['submit'])){
  $name=$_POST['name'];
   $email=$_POST['email'];

mysqli_query($conn,"insert into student(name,email) values($name,$email)");
}
?>