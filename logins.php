<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	require('db.php');
	session_start();

    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			//echo "successfully logined";
			header("location:adminhomepage.php");

            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.html'>Login</a></div>";
				}
    }else{
?>


<form action="login.html" method="post" name="login">
<!--input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" /-->
</form>

<br /><br />

</div>
<?php } ?>


</body>	
</html>
