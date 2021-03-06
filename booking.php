<?php
include('conn.php');


if (!isset($_SESSION['login'])) {
    header("Location: login.php?msg=Make the login");
}

if (!isset($_REQUEST['id'])) {
    header("Location: vehicle.php");
}

$sql = "SELECT * FROM vehicle WHERE id_vehicle = " . $_REQUEST['id'] . " AND id_user = " . $_SESSION['id_user'] . " LIMIT 1";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if ($count < 1) {
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
    margin: 35px 250px 35px 250px;
    border: 2px solid #000000;
    box-shadow: 2px 4px 6px 2px rgba(0, 0, 0, .2);
    text-align: center;
    margin-top: 50px;
}
.book h2{
    font-family: 'Montserrat Alternates', sans-serif;
}
.box form.form-group{

    margin-left: 200px;

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
    <!--hrefhttps://gist.github.com/aleksblago/6102782
http://www.hasseb.fi/bookingcalendar/-->

    <div class="btn_return"><button onclick="window.location.href='vehicle.php';"> Go back </button>
    </div>
    <div class="book">
        <h2> Book your service - Date:</h2>

        <?php

        $NewDate = Date('Y-m-d', strtotime('+14 days'));


        $startTime = strtotime(Date('Y-m-d', strtotime('+1 day')));
        $endTime = strtotime(Date('Y-m-d', strtotime('+45 days')));//how many days it goonna show

        ?>

        <div class="row">

            <form method="post" action="booking2.php">
                <input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Date:</label>
                    <select id="date" name="date">
                        <?php for ($i = $startTime; $i <= $endTime; $i = $i + 86400) {

                            if (date('N', $i) != 7) {

                        ?>
                                <option value="<?php echo date('Y-m-d', $i); ?>"><?php echo date('Y-m-d', $i); ?></option>
                        <?php }
                        } ?>
                    </select>
                </div><!--form-group-->

                <button type="submit" class="save">Next</button>

            </form><!--post BOOKING-->

        </div><!--./row-->

    </div><!--cointainer book-->
</body>
</html>