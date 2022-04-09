
<?php
require_once __DIR__.'/dbconnect.php';
$a = mysqli_query($conn,"select*from crud");


?>
<html>
<head>
<style>
.a
{
	height:400px;
	width:300px;
	border:2px solid green;
	padding:80px;
	margin:0px auto;
	background:red;
	border-radius:10px;
	font-size:30px;
}
</style>
</head>
<body>
<div class="a">
<table border='1' cellspacing="4" cellpadding="2" style="color:#551a8b">
<tr>
<th>id</th>
<th>email</th>
<th>Gender</th>
<th>password</th>
<th>pass</th>
</tr>
<?php while($row = mysqli_fetch_assoc($a)):?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['gen']?></td>
<td><?php echo $row['password']?></td>
<td><?php echo $row['pass']?></td>
</tr>
<?php endwhile; ?>
</table>
</br>
<a href="form1.php">Home page</a>
</div>
</body>
</html>