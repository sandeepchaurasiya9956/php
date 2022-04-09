<?php
require __DIR__.'/dbconnect.php';
  if(isset($_POST['submit']) and ! empty($_POST)){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $number=$_POST['number'];
      $sql = "INSERT INTO crud(name,email,number) values('{$name}','{$email}','{$number}')";
      if(mysqli_query($conn,$sql)){
          echo "Record Inserted";
          header('location:register.php');
      }else{
          echo 'Insert Error'.mysqli_error($conn);
      }
  }
?>


<html>
<head>
</head>
<body>
    <form action="register.php" method="post">
     Name:<input type="text" name="name"/><br/><br/>
     Email:<input type="email" name="email"/><br/><br/>
     Mobile:<input type="number" name="number"/><br/><br/>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 
    require_once __DIR__ .'/show.php';
?>
