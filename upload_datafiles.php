<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
* {
  box-sizing: border-box;
}
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

input[type=text], select, textarea {
  width: 75%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
}
input[type=submit]:hover {
  background-color: #45a049;
  text-align: center;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  margin-left: 200px;
  
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
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;

}
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {
  padding: 2px 16px;
}

</style>
</head>
<body>
      <div class="header">
<center><b><label style="font-size: 35px">SHANTHA</label> </b><br>
<h4 style="margin-left: 30px">A sanofi company</h4></center>
</div>
<div class="topnav">
  <a href="#home">Home</a>
  <a href="#">Notifications</a>
  <a href="#">Contact</a>
  <a href="#">Change Password</a>
  <a href="#">logout</a>
  
  
</div>

<br><br>
<div>
<button id="myBtn" style="margin-left:300px">Upload Employee Details</button>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Upload analysis Details</h2>
      <span class="close">&times;</span>
      
    </div>
    <div class="modal-body">
      <p>
             <table border="3">
      <th>Sr_no.</th>
      <th>Department</th>
      <th>Training Details</th>
      <th>Duration</th>
     </table>
      </p>

      <p>
        <form method="post" action="finalupload.php" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" class="btn">Choose File</input>
        <input type="submit" class="btn" value="upload" name="upload_btn" style="margin-left: 100px"></input>
      </p>
    </div>
  </div>
</div>

<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {  
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
  modal1.style.display ="none"; 
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none"; 

  }
}
</script>

  </form>
</div>

<br><br>
</body>
</html>
