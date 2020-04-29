<?php include('function.php');


?>
<!doctype html>
<html>
<title>Manager Home</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="header">
		<center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center></div>
  	<div class="topnav">
  	<a href="#"style="margin-left: 150px;">Home</a>
    <a href="change_password.php" style="margin-left: 150px;">Change Password</a>
    <a href="#"style="margin-left: 150px;">Notifications</a>
    <a href="manager_home.php?logout='1'"style="margin-left: 150px;">Logout</a>
	</div>
	</div><br><br><br>
		<div>
		<img src="image/2.jpg" class=image>
		<img src="image/1.png" class=image2><br><br>
		<button class="btn" style="margin-left: 265px;"><a href="assign_work.php" style="text-decoration:none"><b>Assign Work</b></a></button>
		<button class="btn" style="margin-left: 215px;"><a href="employee_details.php" style="text-decoration:none"><b>List Of Trainees</b></a></button>
		<br><br>
		<img src="image/3.png" class=image>
		<img src="image/7.jpg" class=image2><br><br>
		<button class="btn" style="margin-left: 265px;"><a href="add_task.php" style="text-decoration:none"><b>Add Work</b></a></button>
		<button class="btn" style="margin-left: 215px;"><a href="add_employee.php" style="text-decoration:none"><b>Add Trainee</b></a></button>
		<br><br>
		<img src="image/5.jpg" class=image>
		<img src="image/1.png" class=image2><br><br>
		<button class="btn" style="margin-left: 265px;"><a href="add_task.php" style="text-decoration:none"><b>Rank Holder</b></a></button>
		<button class="btn" style="margin-left: 215px;"><a href="upload_datafiles.php" style="text-decoration:none"><b>Upload DataFiles</b></a></button>
		<br><br>
</div>
</body>
</html>