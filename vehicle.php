<?php
include('conn.php');
$error = array();

if (!isset($_SESSION['login'])) {
	header("Location: login.php?msg=Make the login");
}

if(isset($_REQUEST['del'])){
	
	$idDel = $_REQUEST['del'];
	
	if(is_numeric($idDel)){
		
		$sqlDel = "SELECT id_vehicle FROM vehicle WHERE id_user = ".$_SESSION['id_user']." AND id_vehicle = ".$idDel." LIMIT 1";

		$resultDel = mysqli_query($conn, $sqlDel);
		$countDel = mysqli_num_rows($resultDel);
		
		if($countDel == 1){
			
			$sqlDelT = "DELETE FROM vehicle WHERE id_vehicle = ".$idDel." LIMIT 1";
			$resultDel2 = mysqli_query($conn, $sqlDelT);
			
		}
		
	}
}

if (!empty($_POST)) {

	$repost = $_POST;

	if (!empty($_POST['vehicle_type'])) {
		$vehicle_type = $_POST['vehicle_type'];
	} else {
		$error[] = "vehicle_type";
	}

	if (!empty($_POST['vehicle_year'])) {
		$vehicle_year = $_POST['vehicle_year'];
		if (!is_numeric($vehicle_year)) {
			$error[] = "vehicle_year validation";
		}
	} else {
		$error[] = "vehicle_year";
	}

	if (!empty($_POST['vehicle_model'])) {
		$vehicle_model = $_POST['vehicle_model'];
	} else {
		$error[] = "vehicle_model error";
	}

	if (!empty($_POST['vehicle_color'])) {
		$vehicle_color = $_POST['vehicle_color'];
	} else {
		$error[] = "vehicle_color";
	}

	if (!empty($_POST['vehicle_engine'])) {
		$vehicle_engine = $_POST['vehicle_engine'];
	} else {
		$error[] = "vehicle_engine";
	}

	if (!empty($_POST['vehicle_make'])) {
		$vehicle_make = $_POST['vehicle_make'];
	} else {
		$error[] = "vehicle_make error";
	}

	if (!empty($_POST['vehicle_registration'])) {
		$vehicle_registration = $_POST['vehicle_registration'];
	} else {
		$error[] = "vehicle_registration error";
	}

	if (!empty($_POST['adicional'])) {
		$adicional = $_POST['adicional'];
	} else {
		$adicional = "";
	}

	if (count($error) == 0) {

		$sql = "SELECT vehicle_registration FROM vehicle WHERE vehicle_registration = '" . $vehicle_registration . "' LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

		if ($count == 0) {

			$sqlInsert = "INSERT INTO vehicle (id_user, vehicle_type, vehicle_year, vehicle_model, vehicle_color, vehicle_engine, vehicle_make, vehicle_registration, adicional) VALUES (" . $_SESSION['id_user'] . ", '" . $vehicle_type . "', '" . $vehicle_year . "','" . $vehicle_model . "','" . $vehicle_color . "','" . $vehicle_engine . "','" . $vehicle_make . "','" . $vehicle_registration . "','" . $adicional . "')";
			$resultinsert = mysqli_query($conn, $sqlInsert);
			if ($resultinsert) {
				header("Location: vehicle.php");
			}
		} else {

			$error[] = "existed vehicle registration";
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


.container.regist,
.container.vehicle {
    padding-top: 50px;
    padding-bottom: 100px;
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

button.save {
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

.container .car h2 {
    font-family: 'Montserrat Alternates', sans-serif;
    text-align: center
}

.container.vehicle {
    border-radius: 15px;
    padding-top: 35px;
    padding-bottom: 35px;
    margin: 50px 35px 70px 35px;
    border: 2px solid #000000;
    box-shadow: 2px 4px 6px 2px rgba(0, 0, 0, .2);
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

	<div class="container vehicle">

		<?php if (count($error) > 0) {

			$errorMsg = implode("<br>", $error);
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Error!</strong><br> <?php echo $errorMsg; ?>
			</div>

		<?php } ?>
		<!--ounting erros on page before procide-->


		<?php

		$sqlVehicle = "SELECT * FROM vehicle WHERE id_user = " . $_SESSION['id_user'] . " ";
		$resultVehicle = mysqli_query($conn, $sqlVehicle);


		?>
		<!--fecth from database all the vehicle register under the same user-->

		<table class="table vehicle">
			<thead>
				<tr style="text-align: center;">
					<th scope="col"><i class="fas fa-car"></i></th>
				<th scope="col">Vehicle registration</th>
					<th scope="col">Vehicle type</th>
					<th scope="col">Vehicle make</th>
					<th scope="col">Vehicle year</th>
					<th scope="col">Vehicle model</th>
					<th scope="col">Vehicle color</th>
					<th scope="col">Vehicle engine</th>
					<th scope="col">Extra info</th>					
					<th scope="col">Action</th>
				</tr>
			</thead>
			<!--fixed header-->

			<tbody>
				<?php
				while ($row = mysqli_fetch_array($resultVehicle)) {
				?>
					<tr style="text-align: center;">
						<th scope="row"><?php echo $row['id_vehicle']; ?></th>
						<td><?php echo $row['vehicle_registration']; ?></td>
						<td><?php echo $row['vehicle_type']; ?></td>
						<td><?php echo $row['vehicle_make']; ?></td>
						<td><?php echo $row['vehicle_year']; ?></td>
						<td><?php echo $row['vehicle_model']; ?></td>
						<td><?php echo $row['vehicle_color']; ?></td>
						<td><?php echo $row['vehicle_engine']; ?></td>
						<td><?php echo $row['adicional']; ?></td>
						<td>[<a href="booking.php?id=<?php echo $row['id_vehicle'];?>">book</a>] [<a href="vehicle.php?del=<?php echo $row['id_vehicle'];?>">delete</a>]</td>
   
					</tr>
				<?php
				}
				?>
				<!--print result from  sql Query $sqlvehicle-->

			</tbody>

		</table>
		<!--./table registered cars-->

		<hr class="mt-5 pt-5">
		<!--horizontal line-->

		<div class="container car">
			<!--its no possible to alterate car infomration . but its possibel to delete and save car with correct information-->
			<h2> Add new car</h2>
			<div class="row">

				<div class="col">

					<form method="post">

						<div class="form-group">
							<label for="vehicle_numb">Vehicle Registration</label>
							<input type="text" name="vehicle_registration" value="<?php echo @$repost['vehicle_registration']; ?>" class="form-control" id="vehicle_numb" aria-describedby="vehicleRegistrationHelp" placeholder="Vehicle Registration Number">
						</div>
						<!--registration number-->

						<div class="form-group">
							<label for="type">Vehicle type</label>
							<select id="type" name="vehicle_type">
								<option>Choose....</option>
								<option value="car" <?php if (@$_POST['vehicle_type'] == "car") {
														echo "selected";
													} ?>>Car</option>
								<option value="motobike" <?php if (@$_POST['vehicle_type'] == "motobike") {
																echo "selected";
															} ?>>Motobike</option>
								<option value="small_bus" <?php if (@$_POST['vehicle_type'] == "small_bus") {
																echo "selected";
															} ?>>Small bus</option>
								<option value="small_van" <?php if (@$_POST['vehicle_type'] == "small_van") {
																echo "selected";
															} ?>>Small van</option>
							</select>
						</div>
						<!--./ehicle type-->

						<div class="form-group">
							<label for="make_brand">Vehicle Make</label>
							<select id="cars" name="vehicle_make">
								<option>Choose....</option>
								<option value="Volkswagen" <?php if (@$_POST['vehicle_make'] == "Volkswagen") {
																echo "selected";
															} ?>>Volkswagen</option>
								<option value="toyota" <?php if (@$_POST['vehicle_make'] == "toyota") {
															echo "selected";
														} ?>>Toyota</option>
								<option value="kia" <?php if (@$_POST['vehicle_make'] == "kia") {
														echo "selected";
													} ?>>Kia</option>
								<option value="ford" <?php if (@$_POST['vehicle_make'] == "ford") {
															echo "selected";
														} ?>>Ford motors</option>
								<option value="GM" <?php if (@$_POST['vehicle_make'] == "GM") {
														echo "selected";
													} ?>>General Motors</option>
								<option value="honda" <?php if (@$_POST['vehicle_make'] == "honda") {
															echo "selected";
														} ?>>Honda</option>
								<option value="BMW" <?php if (@$_POST['vehicle_make'] == "BMW") {
														echo "selected";
													} ?>>BMW</option>
								<option value="nissan" <?php if (@$_POST['vehicle_make'] == "nissan") {
															echo "selected";
														} ?>>Nissan</option>
								<option value="hyndai" <?php if (@$_POST['vehicle_make'] == "hyndai") {
															echo "selected";
														} ?>>Hyndai</option>
								<option value="peugeoy" <?php if (@$_POST['vehicle_make'] == "peugeoy") {
															echo "selected";
														} ?>>Peugeot</option>
								<option value="renault" <?php if (@$_POST['vehicle_make'] == "renault") {
															echo "selected";
														} ?>>Renault</option>
								<option value="citroen" <?php if (@$_POST['vehicle_make'] == "citroen") {
															echo "selected";
														} ?>>Citroën</option>
								<option value="mercedes" <?php if (@$_POST['vehicle_make'] == "mercedes") {
																echo "selected";
															} ?>>Mercedes</option>
								<option value="audi" <?php if (@$_POST['vehicle_make'] == "audi") {
															echo "selected";
														} ?>>Audi</option>
								<option value="suzuki" <?php if (@$_POST['vehicle_make'] == "suzuki") {
															echo "selected";
														} ?>>Suzuki</option>
								<option value="mitsubishi" <?php if (@$_POST['vehicle_make'] == "mitsubishi") {
																echo "selected";
															} ?>>Mitsubishi</option>
								<option value="ducati" <?php if (@$_POST['vehicle_make'] == "ducati") {
															echo "selected";
														} ?>>Ducati</option>
								<option value="honda" <?php if (@$_POST['vehicle_make'] == "honda") {
															echo "selected";
														} ?>>Honda</option>
								<option value="harley_davidson" <?php if (@$_POST['vehicle_make'] == "harley_davidson") {
																	echo "selected";
																} ?>>Harley Davidson</option>
								<option value="Alfa_romeo" <?php if (@$_POST['vehicle_make'] == "Alfa_romeo") {
																echo "selected";
															} ?>>Alfa Romeo</option>
								<option value="ferrari" <?php if (@$_POST['vehicle_make'] == "ferrari") {
															echo "selected";
														} ?>>Ferrari</option>
								<option value="lamborghini" <?php if (@$_POST['vehicle_make'] == "lamborghini") {
																echo "selected";
															} ?>>Lamborghini</option>
								<option value="land_rover" <?php if (@$_POST['vehicle_make'] == "land_rover") {
																echo "selected";
															} ?>>Land Rover</option>
								<option value="mini" <?php if (@$_POST['vehicle_make'] == "mini") {
															echo "selected";
														} ?>>Mini</option>
								<option value="lexus" <?php if (@$_POST['vehicle_make'] == "lexus") {
															echo "selected";
														} ?>>Lexus</option>
								<option value="rolls_royce" <?php if (@$_POST['vehicle_make'] == "rolls_royce") {
																echo "selected";
															} ?>>Rolls-Royce</option>
								<option value="saab" <?php if (@$_POST['vehicle_make'] == "saab") {
															echo "selected";
														} ?>>SAAB</option>
								<option value="yamaha" <?php if (@$_POST['vehicle_make'] == "yamaha") {
															echo "selected";
														} ?>>Yamaha</option>
								<option value="dafra" <?php if (@$_POST['vehicle_make'] == "dafra") {
															echo "selected";
														} ?>>Dafra</option>
								<option value="others" <?php if (@$_POST['vehicle_make'] == "others") {
															echo "selected";
														} ?>>Others...</option>
							</select>
						</div>

						<div class="form-group">
							<label for="YYYY">Vehicle year</label>
							<input type="number" name="vehicle_year" value="<?php echo @$repost['vehicle_year']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="yearHelp" placeholder="YYYY">
						</div>
						<!--./year-->

						<div class="form-group">
							<label for="model">Vehicle model</label>
							<input type="text" name="vehicle_model" value="<?php echo @$repost['vehicle_model']; ?>" class="form-control" id="model" aria-describedby="modelHelp" placeholder="Vehicle model">
						</div>
						<!--model-->

						<div class="form-group">
							<label for="color">vehicle color</label>
							<input type="text" name="vehicle_color" value="<?php echo @$repost['vehicle_color']; ?>" class="form-control" id="color" aria-describedby="colorHelp" placeholder="Vehicle color">
						</div>
						<!--color-->

						<div class="form-group">
							<label for="engine">vehicle engine</label>
							<input type="text" name="vehicle_engine" value="<?php echo @$repost['vehicle_engine']; ?>" class="form-control" id="engine" aria-describedby="engineHelp" placeholder="Vehicle engine">
						</div>
						<!--engine type -->


						<div class="form-group">
							<label for="exampleInputEmail1">adicional</label>
							<input type="text" name="adicional" value="<?php echo @$repost['adicional']; ?>" class="form-control" id="extra" aria-describedby="adicionalHelp" placeholder="Adicional info">
						</div>

						<button type="submit" class="save">Save</button>

					</form>
					<!--post-->

				</div>
				<!--col-->

			</div>
			<!--row-->

		</div>
		<!--container car-->

	</div>
	<!--conntainer vehicle-->
</body>

</html>