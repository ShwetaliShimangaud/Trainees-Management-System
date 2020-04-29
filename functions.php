<?php 
include('function.php');
$primary_key=$_SESSION['primary_key'];
  global $db ,$t;

$queary="SELECT primary_key FROM empoly_details WHERE primary_key=$primary_key";
$result0=mysqli_query($db,$queary);
while($row=mysqli_fetch_assoc($result0))
{
  $v=$row['primary_key'];
  echo $v;

    $query1="UPDATE analysis SET performance=((time_rating/4)+(quality_rating/2)+(team_work/4)) WHERE primary_key=$v";
$results1 = mysqli_query($db , $query1) ;
  $query3= "UPDATE analysis SET y_time=(time_rating*100/(4*performance))";
$results3 = mysqli_query($db , $query3);
 $query8= "UPDATE analysis SET y_quality=(quality_rating*100/(4*performance)) WHERE primarykey=$v";
 $results8 = mysqli_query($db , $query8);
 $query10= "UPDATE analysis SET y_team=(team_work*100/(4*performance)) WHERE primarykey=$v";
 $results10 = mysqli_query($db , $query10);
}
 $queary="SELECT primary_key FROM employ_details WHERE primary_key=$primary_key";
$result0=mysqli_query($db,$queary);
while($row=mysqli_fetch_assoc($result0))
{
  $v=$row['primary_key'];
  echo $v;
$query4="SELECT avg(y_time) as total   FROM analysis  WHERE primarykey=$v";
$result4 = mysqli_query($db,$query4);
while ($row = mysqli_fetch_assoc($result4))
{ 
   $t= $row['total'];
   }

$query5="SELECT avg(y_quality) as a   FROM analysis  WHERE primary_key=$v";
$result5 = mysqli_query($db , $query5);
while ($row = mysqli_fetch_assoc($result5))
{ 
   $q=$row['a'];
   
}
$query6="SELECT avg(y_team) as b   FROM analysis  WHERE primary_key=$v";
$result6 = mysqli_query($db , $query6);
while ($row = mysqli_fetch_assoc($result6))
{ 
  
   $r=$row['b'];


}
$query7="INSERT INTO pie_chart (id,y_time,y_quality,y_team) VALUES('$v','$t','$q','$r' )";
$results7 = mysqli_query($db ,  $query7);
}
}
// escape string
function e($val){
  global $db;
  return mysqli_real_escape_string($db, trim($val));
}
header("location:manager_home.php");
?>