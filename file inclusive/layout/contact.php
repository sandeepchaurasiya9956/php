<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
#outer
{
height: 600px;
width: 1350px;
background: silver;
border: 1px solid aqua;
}		

#inner
{

	height: 500px;
	width: 500px;
	background: white;
	margin: 50px 400px;
}

	</style>
</head>
<body>
<?php include __DIR__.'/menu.php'; ?>
  <H1>This is Contact Page</H1>
  <div id="outer">
  	<div id="inner">
  		NAME:
  		<input type="text" placeholder="Enter the name"/></br></br>
  		Email-id:
  		<input type="text" placeholder="Enter the Email"/>
  	</div>

  </div>
</body>
</html>