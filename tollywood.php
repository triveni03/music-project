<!DOCTYPE html>
<html>
<head>
	<title></title>
<title>home page</title>
	<meta name="veiwport" content="width=device-width",initial-scale=1,user-scalable=no">

	<link rel="stylesheet" type="text/css" href="css/style7.css">

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
			<li><a href="index.html" class="active">Home</a></li>
			<li><a href="songs.html">Songs</a></li>
		
			<li><a href="live.html">Live streaming</a></li>
			<li><a href="aboutus.html">About us</a></li>
			<li><a href="login.html">Login</a></li>
		</ul>
	</header>

<?php
include("db.php");
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
<div id="content">
 <?php
 
 $result=mysqli_query($con,"SELECT * FROM audio where stime='Tollywoodsongs'");
 while($row=$result->fetch_array()){
 	echo "<img src='images/".$row['iname']."' height=\"200px\" width=\"320px\"> <br>"?>
  <audio id="audio" controls>
  		<source src="<?php echo 'songs/'.$row['name'];?>" type="audio/<?php echo $row['type'];?>">
   		 Your browser does not support the audio tag.
	</audio>

<?php }?>

</body>
</html>