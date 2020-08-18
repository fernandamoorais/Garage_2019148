<?php
include('conn.php');


if(!isset($_SESSION['login'])){
	header("Location: login.php?msg=Make the login");
}

if(!isset($_POST['id'])){
	header("Location: booking.php");
}
if(!isset($_POST['date'])){
	header("Location: booking.php");
}

$sql = "SELECT * FROM vehicle WHERE id_vehicle = ".$_POST['id']." AND id_user = ".$_SESSION['id_user']." LIMIT 1";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if($count < 1){
	header("Location: vehicle.php");
}




?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8"> <!--characther set -->
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

	   <!--hrefhttps://gist.github.com/aleksblago/6102782
http://www.hasseb.fi/bookingcalendar/-->

		<div class="container">
		<h2> Book your service - Hour:</h2>
		
		<?php
			
		
			$sqlBooking = "SELECT * FROM booking WHERE date = '".$_POST['date']."' ORDER BY id_employee ASC";
		
			$resultB = mysqli_query($conn, $sqlBooking);

			while($rowB = mysqli_fetch_array($resultB)){
				$slots[$rowB['id_employee']][] = $rowB['slot'];
			}
			
			$sqlEmployee = "SELECT id_employee, name FROM employee ORDER BY id_employee ASC";
			$resultEmp = mysqli_query($conn, $sqlEmployee);
			
		?>
		
			<div class="row">
			
<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee</th>
      <th scope="col">Slot</th>
      <th scope="col">Date</th>
	  <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
<?php while($rowEmp = mysqli_fetch_array($resultEmp)){
	
	for($ySlot=1;$ySlot<=4;$ySlot++){
		
		if(isset($slots[$rowEmp['id_employee']])){

			if(  in_array($ySlot, $slots[$rowEmp['id_employee']])   ){
				$action = "unavailable";
			}else{
				$action = '[<a href="booking3.php?id='.$row['id_vehicle'].'&id_vehicle='.$_POST['id'].'&date='.$_POST['date'].'&slot='.$ySlot.'&employee='.$rowEmp['id_employee'].'">book this hour</a>]';
			}
			
		}else{
			$action = '[<a href="booking3.php?id='.$row['id_vehicle'].'&id_vehicle='.$_POST['id'].'&date='.$_POST['date'].'&slot='.$ySlot.'&employee='.$rowEmp['id_employee'].'">book this hour</a>]';
		}
		
		if($ySlot == 1){
			$tSlot = "08:00";
		}
		if($ySlot == 2){
			$tSlot = "10:00";
		}
		if($ySlot == 3){
			$tSlot = "13:00";
		}
		if($ySlot == 4){
			$tSlot = "15:00";
		}
		
	?>  
    <tr>
      <th scope="row"><?php echo $rowEmp['name'];?></th>
      <td><?php echo $tSlot;?></td>
      <td><?php echo $_POST['date'];?></td>
	  <td><?php echo $action;?></td>
    </tr>
<?php }
}
?>
  </tbody>
  
</table>
				
				
			</div>
		
		</div>