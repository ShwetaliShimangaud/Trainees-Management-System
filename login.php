<?php include('function.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body>
	<div class="header">
		<center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center></div>
  	<div class="topnav">
  	<a href="">Home</a>
    <a href="#">Notifications</a>
    <a href="login.php?logout='1'">Logout</a>
	</div>
	</div>
<form method="post" action="login.php">
<center>
	<?php echo display_error(); ?>
	<div class="log">	
		<h2>Login</h2>
	</div>
		
		<b><label>Username</label></b><br>
			<input type="text" name="username" size="37"><br>
 		<b><label>Password</label></b><br>
			<input type="password" name="password" size="37"><br><br>
			<button type="submit" class="btn" name="login_btn">Login</button><br><br>
	</div>
</form></center>
</body>

</html>