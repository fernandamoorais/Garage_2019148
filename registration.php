<?php
include('conn.php');
$error = array();


if (!empty($_POST)) {

	$repost = $_POST;

	if (!empty($_POST['email'])) {
		$email = $_POST['email'];
	} else {
		$error[] = "Email is required. Please complete the field to continue.";
	}

	if (!empty($_POST['first_name'])) {
		$first_name = $_POST['first_name'];
	} else {
		$error[] = " First is required. Please complete the field to continue.";
	}

	if (!empty($_POST['last_name'])) {
		$last_name = $_POST['last_name'];
	} else {
		$error[] = "Last name is required. Please complete the field to continue.";
	}

	if (!empty($_POST['phone'])) {
		$phone = $_POST['phone'];
	} else {
		$error[] = "A phone number is required. Please complete the field to continue.";
	}

	if (!empty($_POST['birthday'])) {

		$tempDate = explode('-', $_POST['birthday']);
		// checkdate(month, day, year)
		if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
			$birthday = $_POST['birthday'];
		} else {
			$error[] = "A Birthday dayeis required. Please complete the field to continue.";
		}
	} else {
		$error[] = "birthday error";
	}


	if (!empty($_POST['pass'])) {
		$pass = $_POST['pass'];
	} else {
		$error[] = "pass error";
	}
	

	if (count($error) == 0) {

		$sql = "SELECT email FROM user WHERE email = '" . $email . "' LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

		if ($count == 0) {

			$sqlInsert = "INSERT INTO user (email, first_name, last_name, phone, birthday, address, address2, eircode) VALUES ('" . $email . "', '" . $first_name . "','" . $last_name . "','" . $phone . "','" . $birthday . "','" . $address . "','" . $address2 . "','" . $eircode . "')";
			$resultinsert = mysqli_query($conn, $sqlInsert);
			if ($resultinsert) {

				$lastId = mysqli_insert_id($conn);

				$sqlInsertLogin = "INSERT INTO login (login, id_user, pass) VALUES ('" . $email . "', " . $lastId . ", '" . md5($pass) . "')";

				echo $sqlInsertLogin;

				$resultLogin = mysqli_query($conn, $sqlInsertLogin);

				if ($resultLogin) {
					$lastIdLogin = mysqli_insert_id($resultLogin);
					$_SESSION['id_login'] = $lastIdLogin;
					$_SESSION['id_user'] = $lastId;
					$_SESSION['login'] = $email;
					header("Location: vehicle.php");
				}
			}
		} else {

			$error[] = "login igual";
		}
	}
} else {
	$repost = array();
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<!--characther set -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--setting scale for mabile devices-->

	<title>Ger's Garage</title>

	<!-- style-->
	<link href="css/main.css" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>

	<!-- style-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!--script-->
	<style>
		.container.regist {
			padding-top: 50px;
			padding-bottom: 100px;
			margin-top: 50px;
			margin-bottom: 80px;
			margin-left: 60px;
		}

		.row i {
			color: red;
		}

		.form-group {
			padding: 5px 190px 5px 190px;
		}

		.form-group input {
			background-color: #FFFFFF;
			border: solid 1px #000000;
			font-size: 13px;
			color: #000000;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			border-radius: 10px;
			padding-top: 6px;
			padding-bottom: 6px;
			padding-left: 5px;
			padding-right: 5px;
		}

		.form-group label {
			font-size: 14px;
			color: #000000;
			font-weight: normal;
			padding-top: px;
			padding-bottom: 0px;
		}

		.form-group i {
			color: red;
		}

		button.submit {
			background-color: #A29EDB;
			border: solid 1px #A9A9A9;
			font-size: 16px;
			color: #000000;
			font-weight: bold;
			padding-top: 8px;
			padding-bottom: 8px;
			padding-right: 34px;
			padding-left: 34px;
			-moz-border-radius: 20px;
			-webkit-border-radius: 20px;
			border-radius: 20px;
			margin-left: 200px;

		}

		.form-group p.submit input {
			background-color: #A29EDB;
			border: solid 1px #A9A9A9;
			font-size: 16px;
			color: #000000;
			font-weight: bold;
			padding-top: 8px;
			padding-bottom: 8px;
			padding-right: 25px;
			padding-left: 25px;
			-moz-border-radius: 20px;
			-webkit-border-radius: 20px;
			border-radius: 20px;
		}
	</style>

</head>

<body>

	<!-- Navigation BAR -->
	<nav class="navbar  navbar-expand-md navbar-dark bg-dark sticky-top">
		<!--md because its the breakpoint where it gonna change from the mobile to expanded nav-->

		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="services.php">Service</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href='contact.php'> Contact us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href='booking.php'>Book our services</a>
					</li>

					<li class=" nav-item">
						<a class="nav-link" href='login.php'>Member area</a>
					</li>
					<li class=" nav-item">
						<a class="nav-link" href='logout.php'>Logout</a>
					</li>
				</ul>

			</div>
			<!--collapse navbar-collapse justify-content-sm-center-->
		</div>
		<!--container-fluid-->
	</nav>
	<!--NavBar-->

	<div class="container regist">

		<?php if (count($error) > 0) {

			$errorMsg = implode("<br>", $error);
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Error!</strong><br> <?php echo $errorMsg; ?>
			</div>
			<!--alert-->

		<?php } ?>

		<div class="row">
			<div class="col">
				<h2 style="text-align: center;">Registration</h2>
				<form method="post">
					<div class="form-group">
						<label>Required fields are marked</label><i>*</i>
						<br>
						<label for="example@garage.ie">Email </label><i>*</i>
						<input type="email" name="email" value="<?php echo @$repost['email']; ?>" class="form-control" id="example@garage.ie" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">name@domain.com</small>
					</div>

					<div class="form-group">
						<label for="Mary">First Name</label><i>*</i>
						<input type="text" name="first_name" value="<?php echo @$repost['first_name']; ?>" class="form-control" id="Marry" aria-describedby="firstNameHelp" placeholder="First Name">
					</div>

					<div class="form-group">
						<label for="Murphy">Last Name</label><i>*</i>
						<input type="text" name="last_name" value="<?php echo @$repost['last_name']; ?>" class="form-control" id="Murphy" aria-describedby="eecondNameHelp" placeholder="Last Name">
					</div>

					<div class="form-group">
						<label for="phone">Phone</label><i>*</i>
						<input type="text" name="phone" value="<?php echo @$repost['phone']; ?>" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Phone">
					</div>

					<div class="form-group">
						<label for="YYYY/MM/DD">Birthday </label><i>*</i>
						<input type="text" name="birthday" value="<?php echo @$repost['birthday']; ?>" class="form-control" id="YYYY/MM/DD" aria-describedby="birthdayHelp" placeholder="YYYY-MM-DD">
					</div>

					<div class="form-group">
						<label for="address">Address </label>
						<input type="text" name="address" value="<?php echo @$repost['address']; ?>" class="form-control" id="address" aria-describedby="adressHelp" placeholder="Address">
					</div>

					<div class="form-group">
						<label for="54 O'connelll street">Address 2 </label>
						<input type="text" name="address2" value="<?php echo @$repost['address2']; ?>" class="form-control" id="54 O'connelll street" aria-describedby="address2Help" placeholder="Address 2">
					</div>

					<div class="form-group">
						<label for="D00-XX00">eircode</label>
						<input type="text" name="eircode" value="<?php echo @$repost['eircode']; ?>" class="form-control" id="D00-XX00" aria-describedby="emailHelp" placeholder="eircode">
					</div>

					<div class="form-group">
						<label for="code">Password</label><i>*</i>
						<input type="password" name="pass" class="form-control" id="code" placeholder="*****">
					</div>
					
					<button type="submit" class="submit">Save</button>
				</form>
				<!--post-->

			</div>
			<!--./col-->

		</div>
		<!--./row-->

	</div>
	<!--./ container regist-->

</body>

</html>