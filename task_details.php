<?php include('function.php');
if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location:login.php");
}
}
?>
<!doctype html>

<html>
<title>Task Details</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body {
  margin: 0;
  font-family: 'Lato', sans-serif;
}
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>
<div class="header">
    <center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center></div>
    <div class="topnav">
    <a href="manager_home.php">Home</a>
    <a href="change_password.php">Change Password</a>
    <a href="#">Notifications</a>
    <a href="task_details.php?logout='1'">Logout</a>
  </div>
  </div>

	<form>
<table border="2px">
  <tr>
    <th>Task ID</th>
    <th>Task Name</th>
    <th>Details</th>
    <th>Duration</th>
  </tr>
  <?php
    global $db;

    $sql = "SELECT * FROM `task_details` WHERE 1";
    
    $query = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($query))
      { 
        $task_id     = $row['task_id'];
        $taks_name   = $row['taks_name'];
        $task_detail = $row['task_detail'];
        $duration    = $row['duration'];
  ?></tbody>
  <tr>
   <td><b><font ><?php echo $task_id;?></font></b></td>
   <td><b><font ><?php echo $taks_name;?></font></b></td>
   <td><b><font ><?php echo $task_detail;?></font></b></td>
   <td><b><font ><?php echo $duration;?>  days</font></b></td>
  </tr>
  <?php } ?>
</table>
	<br><br>
</form>
</body>
</html>