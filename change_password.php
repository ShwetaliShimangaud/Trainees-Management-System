<?php include('function.php');
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location:login.php");
}?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head></head>
<style>
input[type=text],input[type=password] select{  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 200px solid #ccc;
  border-radius: 50px;
  box-sizing: border-box;
  margin-right: 150px;
  margin-left: 150px;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  text-align: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.center {
  border-radius: 20px;
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
  margin: auto;
  margin-right: 400px;
  margin-left: 400px;
}
</style>
<body>
  <div class="header">
<center><b><label style="font-size: 55px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center>
</div>
<div class="topnav">
  <a href="">Home</a>
  <a href="change_password.php">Change Password</a>
  <a href="change_password.php?logout='1'">logout</a>
</div>
<br><br>
  <form method="post" action="change_password.php">
  <h1 style="margin-left: 500px">Change password</h1><br>
  <div class="center">
    <h4>Current password</h4>
    <input type="password" id="current_psw" name="current password">
    <h4>New password</h4>
    <input type="password" id="new_psw" name="new password">
    <h4>Confirm password</h4>
    <input type="password" id="Confirm_psw" name="confirm_psw"><br><br>
    <button type="submit" class="btn btn-default" name="password_btn">Submit</button>
  </form><br>
</div>
</body>
</html>
