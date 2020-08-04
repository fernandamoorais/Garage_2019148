<?php
//Href: https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database

session_start();
//?
// initializing variables
$username = "";
$first_name = "";
$last_name = "";
$adress_line1 = "";
$adress_line2 ="";
$password ="";
$password2 = "";
$DOB ="";
$phoneNumber = "";
$post_code = "";
$errors = array(); 
/*
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'ger_garage';

$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);*/

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ger_garage');

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username;

	// receive all input values from the form. Call the e() function
  
	$username    =  e($_POST['username']);
	$password  =  e($_POST['password']);
  $password2  =  e($_POST['password2']);
  $first_name = e($_POST['first_name']);
  $last_name = e($_POST['last_name']);
  $adress_line1 = e($_POST['adress_line1']);
 $adress_line2 =e($_POST['adress_line2']);
 $password = e($_POST['password']);
 $password2 = e($_POST['password2']);
 $DOB =e($_POST['DOB']);
 $phoneNumber =e($_POST['$phoneNumber']);
 $post_code =e($_POST['$post_code']);
 $user_type="";

  // form validation: ensure that the form is correctly filled
    // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($first_name)) { array_push($errors, "First name is required"); }
  if (empty($last_name)) { array_push($errors, "Last name is required"); }
  if (empty($DOB)) { array_push($errors, "Date of birth is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($phone)) { array_push($errors, "At least one phone number is required"); }

  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
  }

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO user (username, first_name, last_name, adress_line1,adress_line2, password, password2,DOB, phoneNumber, post_code,user_type) 
					  VALUES ('$username', '$first_name', '$last_name', '$adress_line1','$adress_line2', '$password', '$password2','$DOB', '$phoneNumber', '$post_code','$user_type')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
      header('location: adm.php');
		}else{
			$query = "INSERT INTO user (username, first_name, last_name, adress_line1,adress_line2, password, password2,DOB, phoneNumber, post_code,user_type) 
      VALUES ('$username', '$first_name', '$last_name', '$adress_line1','$adress_line2', '$password', '$password2','$DOB', '$phoneNumber', '$post_code','$user_type')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: logged.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE id=" . $id;
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
// LOGIN USER
//check if user input correct data
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
      array_push($errors, "Username is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }else {
          array_push($errors, "Wrong username/password combination");
      }
  }
}

//to disable/able the access  page without even logging in

//tells you if a user is logged in or not by returning true or false.
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button is clicked and foward to index page 
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
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
		$password = md5($password);

		$query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: logged.php');
			}
		}else {
			array_push($errors, "Wrong username or password");
		}
	}
}

//to create admin users
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
/*function isStaff()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'staff' ) {
		return true;
	}else{
		return false;
	}
}*/
