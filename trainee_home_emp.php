<?include('function.php');
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location:login.php");
}?>
<?php 
$dataPoints = array();
$dataPoints1 = array();
$dataPoints2 = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    $link = new \PDO(   'mysql:host=localhost;dbname=employmanangement;charset=utf8mb4',
                        'root', 
                        '', 
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
  
    $handle = $link->prepare('select task_id, time_rating, quality_rating from analysis where task_id=0'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
    
    foreach($result as $row){
        array_push($dataPoints1, array("label"=> $row->task_id, "y"=> $row->quality_rating));
    }

    $handle1 = $link->prepare('select id, y_time , y_quality , y_team from pie_chart where id=1'); 
    $handle1->execute(); 
    $result1 = $handle1->fetchAll(\PDO::FETCH_OBJ);
    
    foreach($result1 as $row){
        array_push($dataPoints2, array("label"=> $row->id, "y"=> $row->y_time));
        array_push($dataPoints2, array("label"=> $row->id, "y"=> $row->y_quality));
        array_push($dataPoints2, array("label"=> $row->id, "y"=> $row->y_team));
    }
  $link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
  
  
?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
  
  </style>
<script>
window.onload = function () {
   
var chart4 = new CanvasJS.Chart("chartContainer4", {
  animationEnabled: true,
  //theme: "light2",
  title:{
    text: "Test Score"
  },
  axisX:{
    crosshair: {
      enabled: true,
      snapToDataPoint: true
    }
  },
  axisY:{
    title: "Score",
    crosshair: {
      enabled: true,
      snapToDataPoint: true
    }
  },
  toolTip:{
    enabled: false
  },
  data: [{
    type: "area",
    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
  }]
});
var chart3 = new CanvasJS.Chart("chartContainer3", {
  animationEnabled: true,
  title: {
    text: "Usage Share of Desktop Browsers"
  },
  subtitles: [{
    text: "November 2017"
  }],
  data: [{
    type: "pie",
    yValueFormatString: "#,##0.00\"%\"",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
  }]
});
 chart3.render();
 chart4.render();

}
</script>

</head>
<body> 
  
      <div class="header">
    <center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center></div>
    <div class="topnav">
    <a href="trainee_home_emp.php">Home</a>
    <a href="change_password.php">Change Password</a>
    <a href="#">Notifications</a>
    <a href="trainee_home_emp.php?logout='1'">Logout</a>
  </div>


<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>

    <?php endif ?>
    <br><br><br><br>
    <div>
      <button class="btn" style="margin-left: 290px;"><a href="task_details_emp.php" style="text-decoration:none"><b>Total Task</b></a></button>
      <button class="btn" style="margin-left: 200px;"><a href="analysis.php" style="text-decoration:none"><b>Analysis</b></a></button>
      <br>
    </div><br>
<div class=con   id="chartContainer3" ></div><br>
<div class=con   id="chartContainer4" ></div><br><br>



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="log">

</div>
</body>

</html>