<?php

require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inserting Page</title>

  <meta name="veiwport" content="width=device-width",initial-scale=1,user-scalable=no">

  <link rel="stylesheet" type="text/css" href="css/about.css">

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

<link rel="stylesheet" href="css/insert.css" />
<section>
  <header>
    <a href="#" class="logo"><img src="img/logo.jpg" width="100px;" height="80px;"></a>
    <a class="toggle">Menu</a>
    <ul class="active">     
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </header>

<link rel="stylesheet" href="css/view.css" />
</head>
<body>
<div class="form">

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>	
<tr><th><strong>S.No</strong></th><th><strong>Category</strong></th><th><strong>song name</strong></th><th><strong>image</strong></th><th><strong>ID</strong></th></tr>
</thead>

<tbody>

<h2>Enter the ID to edit</h2>
<form action="edit.php" method="POST" enctype="multitype/form-data">
	<input type="number" name="id"><br></br>
	<select name="stime" id="stime">
  <option value="Bollywoodsongs">Bollywoodsongs</option>
  <option value="Punjabisongs">Punjabisongs</option>
  <option value="Tollywoodsongs">Tollywoodsongs</option>
   <option value="Tamilsongs">Tamil Songs</option>
  <option value="Hollywoodsongs">HollywoodSongs</option>
  <option value="FrenchSongs">Frenchsongs</option>
</select>
<br></br> 
<input type="file" name="song"/><br></br>
<!--input type="file" name="image"/><br></br-->
	<input type="submit" name="submit" value="submit"/><br></br>
</form>
	<h1>The songs in the database are:<br></br></h1>
<?php
$count=1;
$sel_query="Select * from audio;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["stime"]; ?></td>
	<td align="center"><?php echo $row["name"]; ?></td>
	<td align="center"><?php echo $row["iname"]; ?></td>
	<td align="center"><?php echo $row["id"]; ?></td></tr>
<?php $count++; } ?>
</tbody>
</table>

</div>
</body>
</html>
