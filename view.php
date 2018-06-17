<?php

require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View songs</title>
<link rel="stylesheet" href="css/view.css" />
</head>
<body>
<div class="form">

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>ID</strong></th><th><strong>Category</strong></th><th><strong>song name</strong></th><th><strong>image</strong></th><th><strong>delete</strong></th></tr>
</thead>
<tbody>
	<h1>The songs in the database are:<br></br></h1>
<?php
$count=1;
$sel_query="Select * from audio;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["id"]; ?></td>
	<td align="center"><?php echo $row["stime"]; ?></td>
	<td align="center"><?php echo $row["name"]; ?></td>
	<td align="center"><?php echo $row["iname"]; ?></td>
	<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

</div>
</body>
</html>
