<?php include('work_rating.php') 
 include('function.php');?>
<!doctype html>

<html>
<title>Employ Details</title>
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
<script>
function openNav() {
  document.getElementById("myNav").style.width = "20%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
</head>
<body>
<div class="header">
	<div id="myNav" class="overlay">
 	 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  	<div class="overlay-content">
    <a href="#">Update Profile </a>
    <a href="#">Change Password</a>
    <a href="#">Notifications</a>
    <a href="#">Logout</a>
	</div>
	
  </div>
	<span style="font-size:30px;cursor:pointer" margin-top:"50%" onclick="openNav()">&#9776; </span>
	<center><b>Shantha </b><br>
	<h4 style="margin-left: 30px">A sanofi company</h4></center>
</div>

	<form  method="post" action="employ_details.php">
<table border="2px">
  <tr>
    <th>Name of Trainees</th>
    <th>Employ ID or pk</th>
    <th>Email</th>
    <th>Phone No</th>
    <th>Password</th>
  </tr>
  <?php
    global $db;
    $sql = "SELECT * FROM employ_details";
    
    $query = mysqli_query($db, $sql);
    $array = array();
     $array2 = array();
    $i=0;$j=0;
    while ($row = mysqli_fetch_array($query))
      { 
         $j++;   
        $name  = $row['firstname'];
        $employid   = $row['employid'];
        $email      = $row['email'];
        $phone_no   = $row['contactno'];
        $password   = $row['password'];
        $array[] = $row['employid'];
  ?></tbody>
  <tr>
   <td><b><font ><?php echo $name;?></font></b></td> 
   <td><b><font ><center>   
      <button type="submit" href="work_rating.php" class="btn2" name="upload" value="<?php echo $array[$i];?>"  style= "text-align:center"><?php echo $array[$i];?></button>
   </center>  </font></b></td> 
   <td><b><font ><?php echo $email;?></font></b></td>
   <td><b><font ><?php echo $phone_no;?></font></b></td>
   <td><b><font ><?php echo $password;?></font></b></td>
  
  </tr>
  <?php   $i++; }?>
</table>
	<br><br>
</form>
<div class="footer">Contact Us</div>
</body>
</html>

  
