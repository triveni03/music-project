<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<meta name="veiwport" content="width=device-width",initial-scale=1,user-scalable=no">

	<link rel="stylesheet" type="text/css" href="css/style1.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script
  src="https://code.jquery.com/jquery-3.3.1.js">
</script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('.toggle').click(function()
		{
			$('ul').slideToggle(500);
		})
	})
</script>
</head>
<body>
<section>
	<header>
		<a href="#" class="logo"><img src="img/logo.jpg" width="100px;" height="80px;"></a>
		<a class="toggle">Menu</a>
		<ul class="active">
		
			<li><a href="view.php">veiw</a></li>
			<li><a href="admin.php">Edit</a></li>
			
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</header>
</section>
</body>
</html>