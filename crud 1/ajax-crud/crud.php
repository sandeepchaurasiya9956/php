<html>
<head>
<style>
.a
{
	height:80px;
	width:1350px;
	background:aqua;
}
table
{
	height:50px;
	width:1350px;
	margin-top:20px;
	background:skyblue;
	
}
</style>
</head>
<body>
<h1 style="text-align:center; color:orange">CRUD WITH AJAX</h1>
<div class="a"><input type="submit" id="btn" value="add"></div>
<table border="1" style="color:black; font-size:25px;" id="table-data">
<tr> 
<th>ID</th>
<th>NAME</th>
</tr>
<tr>
<td>1</td>
<td>Ritsh</td>
</tr>
</table>
<script type="text/javascript" src="jquery.js"></script>
<script type="tetx/javascript"></script>
$(document).ready(function(){
	$("#btn").on("click" function(){
		$.ajax({
			url:"load.php";
			type:"post";
			success:function(data){
				$("#table-data")
			}
		});
	});
});
</body>
</html>