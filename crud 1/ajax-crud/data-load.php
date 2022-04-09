<?php

include __DIR__.'/dbconnect.php';
$sql = "select * from crd";
$result = mysqli_query($conn,$sql) or die("sql query failed")
if(mysqli_num_rows($result)>0)
{
	$output = '<table border="1" width="1350px">
	<tr>
	<th>id</th>
	<th>name</th>
	</tr>';
	while($row = mysqli_fetch_assoc($result)){
		$output."<tr><td>{$row["id"]}</td>
		<td>{$row["name"]}</tr></td>";
	}
	$output."</table>";
	
	mysqli_close($conn);
	
	echo $output;
}else{
	echo "<h2>Record no Found.</h2>";
	
}
?>