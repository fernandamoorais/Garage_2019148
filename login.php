<?php
session_start();
include('connect_db_GCP.php');

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check to see if the form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username= $_POST['username'];
    $pass= $_POST['password'];

    // create SQL statement
    $sql = "SELECT id, user FROM users WHERE user='".$username."' and pass='".$pass."' ";

    // Query database
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    // count the number of records found
    $count = mysqli_num_rows($result);

    // if result matches $username and $password, table row must be 1 row
    if($count > 0) {
		
        // Set our session variable
        $_SESSION['login_user'] = $row['user'];
		$_SESSION['id_user'] = $row['id'];
		
		if(!empty($_REQUEST['url'])){
			switch ($_REQUEST['url']) {
				case 1:
					$redirect = "skills.php";
					break;
				case 2:
					$redirect = "softwares.php";
					break;
				case 3:
					$redirect = "education.php";
					break;
				case 4:
					$redirect = "employees.php";
					break;
				default:
				   $redirect = "index.php";
			}
		}else{
			$redirect = "index.php";
		}
        header('Location: '.$redirect);
    } 
            else {
            $error = "Your Login Name or Password is invalid";
            }
         // 5. Close database connection
mysqli_close($connection);
 }
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php<?php if(isset($_GET['url'])){echo "?url=".$_GET['url'];} ?>" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="access">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body> 
</html>