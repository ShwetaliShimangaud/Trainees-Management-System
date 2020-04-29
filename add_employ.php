<?include('function.php');
if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location:login.php");
}
?><!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
      <div class="header">
<center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center>
</div>
<div class="topnav">
  <a href="manager_home.php">Home</a>
  <a href="#">Notification</a>
  <a href="change_password.php">Change Password</a>
  <a href="add_employ.php?logout='1'" style="margin-left:60%">logout</a>
</div>
<br>
  	 <div class="container">
    <div class="col-sm-12">
      <center><h1  class="head">Add Employee </h1></center>
    </div>
  </div>
  <br>
  <div class="container">
		<div class="col-sm-12">
			<center><h1  class="head"></h1></center>
		</div>
	</div>
  <form method="post" action="add_employ.php">
	<div class="container">
		<div class="form-group">
     		<label class="control-label col-sm-2" for="name">Name:</label>
     		<div class="col-sm-10">
        		<input type="text" class="form-control" placeholder="Enter name" name="name">
      		<br>
          </div>
    	</div>
    </div>
    <div class="container"> 
    <div class="form-group">
          <label class="control-label col-sm-2" for="Employee">Employee ID</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="Enter Employee ID" name="employID">
            <br>
          </div>
      </div>
    </div>
    <div class="container">	
		<div class="form-group">
      		<label class="control-label col-sm-2" for="email">Email:</label>
      		<div class="col-sm-10">
        		<input type="email" class="form-control" placeholder="Enter email" name="email">
      		<br>
          </div>
    	</div>
    </div>
    <div class="container">	
		<div class="form-group">
      		<label class="control-label col-sm-2" for="phone">Mob No:</label>
      		<div class="col-sm-10">
        		<input type="text" class="form-control" id="phone" placeholder="Enter Mobile No." name="phoneNo">
      		<br>
          </div>
    	</div>
    </div>
    <div class="container">	
		<div class="form-group">
      		<label class="control-label col-sm-2" for="Password">Password</label>
      		<div class="col-sm-10">
        		<input type="psw" class="form-control"  placeholder="Enter Password" name="password">
      		<br>
          </div>
    	</div>
    </div>
    <div class="container"> 
    <div class="form-group">
          <label class="control-label col-sm-2" for="user_type">User Type</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="Enter User Type" name="user_type">
          <br>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="form-group">        
          <div class="col-sm-offset-5 col-sm-4">
            <button type="submit" class="btn btn-default" name="add_employ_btn">Submit</button>
          </div>
      </div>
    </div>
  </form>
<br><br>
</body>
</html>