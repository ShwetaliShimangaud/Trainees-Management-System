<?php include('function.php');
if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location:login.php");
}
?>
<!doctype html>

<html>
<title>Rank Holders</title>
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
    <a href="#">Home</a>
    <a href="#">Notifications</a>\
    <a href="change_password.php">Change Password</a>
    <a href="rank_holders.php?logout='1'">Logout</a>
  </div>
  </div>

	<form>
<table border="2px">
  <tr>
    <th>Employee ID</th>
    <th>Name</th>
    <th>Average</th>
  </tr>
  <?php
    global $db , $employid , $name , $average;
    $sql = "SELECT * FROM `pie_chart` WHERE 1";
    $query = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($query))
      { 
        $id     = $row['id'];
        $average   = $row['average'];
      }
      $sql1 = "SELECT * FROM `empoly_details` WHERE primary_key=1 ";
      $query1 = mysqli_query($db, $sql1);
      while($row = mysqli_fetch_array($query1))
      {
        $name = $row['name'];
        $employ_id =$row['employ_id'];
      }
 ?>  </tbody>
  <tr>
   <td><b><font ><?php echo $employ_id;?></font></b></td>
   <td><b><font ><?php echo $name;?></font></b></td>
   <td><b><font ><?php echo $average;?></font></b></td>
   
 </tr>
   

</table>
	<br><br>
</form>
</body>
</html>