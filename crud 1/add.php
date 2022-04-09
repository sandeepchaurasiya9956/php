<?php
include_once __DIR__.'/setting.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    mysqli_query($conn,"insert into san(name,email) values('$name','$email')");
    header('location:index.php');
    die();
}
?>
<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"/></td>
        </tr>
    </table>
</form>

