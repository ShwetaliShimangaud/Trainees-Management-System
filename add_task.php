<?php include('function.php');
if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
} 
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location:login.php");
}?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 75%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  text-align: center;
}

input[type=submit]:hover {
  background-color: #45a049;
  text-align: center;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  margin-left: 100px;
  margin-right: 200px;
  text-align: center;
}

.col-25{
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  display: table;
  clear: both;
  text-align: center;
}
</style>
</head>
<body>
     <div class="header">
    <center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center></div>
    <div class="topnav">
    <a href="manager_home.php">Home</a>
     <a href="#">Notifications</a>
    <a href="change_password">Change Password</a>
   
    <a href="add_task.php?logout='1'">Logout</a>
  </div>
  </div>
  <h3 style="text-align: center;">Add task</h3>
  <h4 style="padding-left: 220px">Through excel sheet</h4>
<form action="add_task.php" method="post">
  <input type="file" name="fileToUpload" id="fileToUpload" class="btn"  style="margin-left:200px">Choose File</input>
  <input type="submit" class="btn" value="upload" name="upload_btn"style="margin-left: 400px">Upload File</input>
</form>
<h4 style="padding-left: 220px">Enter the task</h4>
<form>
<div class="container">
  <div class="row">
    <div class="col-25">
      <label for="taskid">Task id</label>
    </div>
    <div class="col-75">
      <input type="text" name="task_id" placeholder="Task id..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Task Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="task_name" placeholder="Task name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="duration">Duration</label>
    </div>
    <div class="col-75">
    <input type="text" name="duration" placeholder="duration..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="details">Task details</label>
    </div>
    <div class="col-75">
      <textarea id="details" placeholder="Task details.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <br>
 <button type="submit" class="btn" value="Submit" name="add_task_btn" style="margin-left: 50px">Submit</button>

  </form>
</div>

<br><br>
</body>
</html>
