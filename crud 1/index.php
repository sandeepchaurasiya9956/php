<?php
include_once __DIR__."/setting.php";

?>
<a href="add.php">Add Records</a><br/>
<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>email</td>
<td>action</td>
</tr>
<?php 
$i=1;
while($row = mysqli_fetch_assoc($res)){?>
<tr>
<td><?php echo $i?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['email']?></td>
<td>
    <a href="edit.php? id=<?php echo $row['id']?>">Edit</a>
    <a href="delete.php? id=<?php echo $row['id']?>">Delete</a>
</td>
</tr>
<?php 
$i++;

}?>
</table>



