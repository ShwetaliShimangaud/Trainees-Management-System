<?php include('function.php');
?><!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
   li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>

<body>
  <div class="header">

<center><b><label style="font-size: 50px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A Sanofi Company</h4></center>
</div>
<div class="topnav">
  <a href="manager_home.php">Home</a>
  <a href="">Notification</a>
  <a href="change_password.php">Change Password</a>
  <a href="attendance.php?logout='1'">logout</a>
   <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Profile
      </a>
    <div class="dropdown-content">
      <a href="#">Change Password</a>
    </div>
  </li>

</div>

  <h1 style="text-align: center;">Attendance</h1>
  <div class="center">
  <form method="post" action="attendance.php">
    <h3>Enter absentees</h3><br>
    <input type="text" id="attendance" name="trainee_id" placeholder="trainee id.."><br><br>
    <button type="submit" class="btn" name="attendance_btn">Submit</button>
  </form>
</div>
</body>
</html>
