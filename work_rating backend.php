
<?php
$db = mysqli_connect('localhost', 'root', '', 'employmanangement')or die("Not connected.");

// connect to database
//$db = mysqli_connect('localhost', 'root', '', 'employmanagement')or die("Not connected.");
if (isset($_POST['update_performance'])) {
  update_performance();
}
function update_performance(){
global $db;
$employ_id= $_POST['employ_id'];
echo $employ_id;
   $sql = "SELECT * FROM empoly_details WHERE employ_id='$employ_id' limit 1";
   $query = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($query))
      { 
        $primary_key     = $row['primary_key'];

  $task_id   = $_POST['task_id'];//firstname
  $time_rating= $_POST['time_rating'];
  $quality_rating= $_POST['quality_rating'];
  $team_work= $_POST['team_work'];
/*$queary="SELECT time_rating,quality_rating,team_work FROM analysis WHERE taskid=$taskid";
$result0=mysqli_query($db,$queary);*/
 $query1="UPDATE analysis SET time_rating=$time_rating WHERE task_id =$task_id  AND  primary_key=$primary_key ";
$results1 = mysqli_query($db , $query1) ;
 $query8= "UPDATE analysis SET quality_rating=$quality_rating WHERE task_id =$task_id  AND primary_key=$primary_key";
 $results8 = mysqli_query($db , $query8);
 $query10= "UPDATE analysis SET team_work=$team_work WHERE task_id =$task_id  AND primary_key=$primary_key";
 $results10 = mysqli_query($db , $query10);
}
}