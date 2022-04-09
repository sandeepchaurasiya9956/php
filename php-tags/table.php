<?php 
include __DIR__.'/connection.php';
$a = mysqli_query($conn,"select * from sandy");
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>number</th>
        </tr>
        <?php while($rows = mysqli_fetch_assoc($a));?>
        <tr>
            <td><?php echo $rows['id']?></td>
            <td><?php echo $rows['name']?></td>
            <td><?php echo $rows['email']?></td>
            <td><?php echo $rows['number']?></td>
        </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>