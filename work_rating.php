<?php include('work_rating backend.php'); include('function.php'); 
if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location:login.php");
}?>
<?php

if (isset($_POST['upload']))
{
  
   $employ_id= $_POST['upload'];
  ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<style>
</style>
<body>
  <div class="header">
    <center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center></div>
    <div class="topnav">
    <a href="#">Home</a>
    <a href="#">Update Profile </a>
    <a href="#">Change Password</a>
    <a href="#">Notifications</a>
    <a href="task_details.php?logout='1'">Logout</a>
  </div>
  </div><br><br>

  <h1 style="text-align: center;">Update performance</h1>  
  <form  method="post" action="employee_details.php">
    <center>
      <h3>FOR ID</h3>
       <input type="text" id="update_performance" name="employ_id" value="<?php echo $employ_id ?>">
       <h3>Enter task id</h3>
    <input type="text" id="update_performance" name="task_id" placeholder="task id.."></center>
    <br>
      <label style="margin-left: 16.5%">Time Rating</label>
      <label style="margin-left: 16.5%">Quality Rating</label>
      <label style="margin-left: 16.5%">Team Work</label>
    <input type="text" name="time_rating" placeholder="rate out of 10.."style="margin-left: 12.5%">
      
    <input type="text"  name="quality_rating" placeholder="rate out of 10.."style="margin-left: 7.5%">
       
    <input type="text"  name="team_work" placeholder="rate out of 10.."style="margin-left: 7.5%">
    <br><br>
  
  <center>   
      <button type="submit" class="btn" name="update_performance" style= "text-align:center">Submit</button>
   </center> 

  </form>
  <center>
   <button type="submit" class="btn" style= "text-align:center">feedback</button>
   </center>
</body>
</html>
<?php }?>