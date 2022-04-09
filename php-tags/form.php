<?php
include __DIR__.'/connection.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    mysqli_query($conn,"insert into sandy(name,email,number)values('$name','$email','$number')");
    header('location:table.php');
    die();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        NAME: <br>
        <input type="text" name="name"> <br> 
       EMAIL: <br> 
       <input type="email" name="email"> <br> 
       NUMBER: <br>
     <input type="number" name="number" > <br> <br>
     <input type="submit" name="submit">
    </form>
</body>
</html>