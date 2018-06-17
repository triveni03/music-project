<?php

require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
</head>
<body>
	<h1>WELCOME TO ADMIN PANNEL</h1>
	<P>Select your operation</P>
	<div class="div1">
	<button type="button" name="insert" class="button1"><a href="insert.php">Insert</a></button>
	<button type="button" name="delete" class="button2"><a href="delete.html">Delete</a></button>
	<button type="button" name="edit" class="button3"><a href="update.php">Edit</a></button>
	</div>
</body>
</html>