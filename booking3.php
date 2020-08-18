<?php
include('conn.php');


if (!isset($_SESSION['login'])) {
    header("Location: login.php?msg=Make the login");
}

if (!isset($_REQUEST['id'])) {
    header("Location: vehicle.php");
}

if (!isset($_REQUEST['date'])) {
    header("Location: booking2.php");
}

if (!isset($_REQUEST['slot'])) {
    header("Location: booking2.php");
}

if (!isset($_REQUEST['employee'])) {
    header("Location: booking2.php");
}

$sql = "SELECT * FROM vehicle WHERE id_vehicle = " . $_REQUEST['id'] . " AND id_user = " . $_SESSION['id_user'] . " LIMIT 1";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if ($count < 1) {
    header("Location: vehicle.php");
}

$sql = "SELECT * FROM booking WHERE id_employee = " . $_REQUEST['employee'] . " AND slot = " . $_REQUEST['slot'] . " AND date = '" . $_REQUEST['date'] . "' LIMIT 1";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if ($count != 0) {
    header("Location: booking2.php");
}

$sqlConfirm = "INSERT INTO booking (id_user, id_vehicle, date, slot, id_employee, status) VALUES (" . $_SESSION['id_user'] . ", " . $_REQUEST['id'] . ", '" . $_REQUEST['date'] . "', " . $_REQUEST['slot'] . ", " . $_REQUEST['employee'] . ", 1)";
$resultConfirm = mysqli_query($conn, $sqlConfirm);
if (!$resultConfirm) {
    header("Location: vehicle.php");
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
.book {
    border-radius: 15px;
    padding-top: 35px;
    padding-bottom: 35px;
    padding-left: 30px;
    margin: 35px 230px 35px 250px;
    border: 2px solid #000000;
    box-shadow: 2px 4px 6px 2px rgba(0, 0, 0, .2);
    text-align: center;
    margin-top: 50px;
}
.book h2{
    font-family: 'Montserrat Alternates', sans-serif;
}
.book.row{
    text-align: center;
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
					<li class="nav-item ">
						<a class="nav-link" href="index.php">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="services.php">Service</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href='contact.php'> Contact us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" href='booking.php'>Book our services</a>
					</li>

					<li class=" nav-item">
						<a class="nav-link" href='vehicle.php'>My vehicles</a>
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
    <div class="book">
        <h2> Book your service was Confirmed!!!</h2>

        <?php

        if ($_REQUEST['slot'] == 1) {
            $tSlot = "08:00";
        }
        if ($_REQUEST['slot'] == 2) {
            $tSlot = "10:00";
        }
        if ($_REQUEST['slot'] == 3) {
            $tSlot = "13:00";
        }
        if ($_REQUEST['slot'] == 4) {
            $tSlot = "15:00";
        }

        ?>

        <div class="row">
<!--display again the time of slot for customer-->
            Your book is confirmed at <?php echo $_REQUEST['date']; ?> - <?php echo $tSlot; ?>. See you.

        </div><!--./row-->

    </div><!--box-->