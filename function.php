<?php  
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'newemp_management');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 
global $primary_key;
// call the register() function if register_btn is clicked
if (isset($_POST['add_employ_btn'])) {
	add_employ();
}

// REGISTER USER
function add_employ(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$name   =  e($_POST['name']);
	$trainee_id    =  e($_POST['trainee_id']);
	$phone_no	 = e($_POST['phoneNo']);
	$email       =  e($_POST['email']);
	$user_type   =  e($_POST['user_type']);
	$department  =  e($_POST['department']);
	$password    =  e($_POST['password']);
	// form validation: ensure that the form is correctly filled
	if (empty($name)) { 
		array_push($errors, "Name is required"); 
	}
	if (empty($trainee_id)) { 
		array_push($errors, "Trainee Id  is required"); 
	}
	if (empty($phone_no)) {
		array_push($errors,"Phone NO is required");
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($user_type)) { 
		array_push($errors, "User Type is required"); 
	}
	if (empty($department)) { 
		array_push($errors, "Department is required"); 
	}
	if (empty($password)) { 
		array_push($errors, "Password is required"); 
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
	
			$query = "INSERT INTO `employ_details`(`primary_key`, `name`, `trainee_id`, `email`, `phone_no`, `user_type`, `department`, `password`) 
					 VALUES('','$name','$trainee_id','$email','$phone_no','$user_type','$department','$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: add_employee.php');
		}
	}

// return user array from their id
function getUserById($primary_key){
	global $db;
	$query = "SELECT * FROM employ_details WHERE primary_key= $primary_key";
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$query = "SELECT * FROM `employ_details` WHERE trainee_id='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['primary_key'] = $logged_in_user['primary_key'];  	
				$_SESSION['success']  = "You are now logged in as admin";
				header('location: manager_home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['primary_key'] = $logged_in_user['primary_key']; 
				$_SESSION['name'] = $logged_in_user['name'];
				$_SESSION['success']  = "You are now logged in as user";
				header('location: trainee_home_emp.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}


if (isset($_POST['assign_work_btn'])) {
	add_work();
}

// Add Question Set
function add_work(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$work_name    =  e($_POST['work_name']);
	$department   =  e($_POST['department']);
	$duration     =  e($_POST['duration']);

	// form validation: ensure that the form is correctly fille
		
			$query = "INSERT INTO `task_details`(`task_id`, `department`, `training`, `duration`) VALUES ('','$department','$work_name','$duration') ";
		mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			
		}
// Delete Question
function change_password(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$current_password   =  e($_POST['current_psw']);
	$new_password       =  e($_POST['new_psw']);
	$confirm_password   =  e($_POST['confirm_psw']);
	// form validation: ensure that the form is correctly filled
	if (empty($current_password)) { 
		array_push($errors, "current password is required"); 
	}
	if (empty($new_password)) { 
		array_push($errors, "New Password is required"); 
	}
	if (empty($confirm_password)){
		array_push($errors, "confirm_password is required");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		if($new_password==$confirm_password){
			$query = "UPDATE empoly_details SET password=$new_password WHERE primary_key='"
    .$_SESSION['primary_key'].
    "'";
			mysqli_query($db, $query);
			}	
		}
	}