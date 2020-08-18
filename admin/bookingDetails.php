<?php
include('../conn.php');

if (!isset($_SESSION['isAdm'])) {
    header("Location: ../login.php");
}
//update status

if ((!empty($_POST['id'])) and (!empty($_POST['status']))) {

    $sqlUpdate = "UPDATE booking SET status = " . $_POST['status'] . " WHERE id_booking = " . $_POST['id'] . " ";
    $resultUpdate = mysqli_query($conn, $sqlUpdate);
}

$sqlBook = "SELECT * FROM booking WHERE id_booking = " . $_REQUEST['id'];

$resultBook = mysqli_query($conn, $sqlBook);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--characther set -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--setting scale for mabile devices-->

    <title>Ger's Garage ADM</title>



    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>
    <link  rel="stylesheet" type="text/css" href="../css/admin.css">
    <!-- style-->

    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>

</head>

<body>
    <div class="billing">
        <div class="grid-container">
            <div class="btn_return"><button onclick="window.location.href='../admin/admbooking.php';"> Go back to Menu </button>
            </div>
            <!--btn_return-->
            <div class="skip"></div>

        </div>
        <!--grid-->

        <div class="header_wrap">


        </div>
        <!--./"header_wrap "-->
        <div class="billing">
        <div class="update">
            
		
		<form method="post" action="">
		<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id'];?>">
		
		Status:
		<select id="status" name="status">
		
			<option value="1">Booked</option>
			<option value="2">In Service</option>
			<option value="3">Fixed / Completed</option>
			<option value="4">Collected</option>
			<option value="5">Unrepairable / Scrapped</option>

		
		</select>
		
		<button type="submit" class="btn_return">Update</button>
		
		</form>
		
		</div><!--grid-->
		
	</div><!--./billing Update state-->

        <table class="table center table-striped table-class" id="table-id">

            <tr>
                <th>Booking ID</th>
                <th>Name</th>
                <th>Vehicle registration</th>
                <th>Date</th>
                <th>Hour</th>
                <th>Status</th>


            </tr>


            <!--header-->

            <?php
            while ($rowBook = mysqli_fetch_array($resultBook)) {

                $sqlUser = "SELECT first_name, last_name FROM user WHERE id_user = " . $rowBook['id_user'] . " ";
                $resultUser = mysqli_query($conn, $sqlUser);
                $rowUser = mysqli_fetch_array($resultUser);

                $sqlVeh = "SELECT * FROM vehicle WHERE id_vehicle = " . $rowBook['id_vehicle'] . " ";
                $resultVeh = mysqli_query($conn, $sqlVeh);
                $rowVeh = mysqli_fetch_array($resultVeh);

                $ySlot = $rowBook['slot'];
                if ($ySlot == 1) {
                    $tSlot = "08:00";
                }
                if ($ySlot == 2) {
                    $tSlot = "10:00";
                }
                if ($ySlot == 3) {
                    $tSlot = "13:00";
                }
                if ($ySlot == 4) {
                    $tSlot = "15:00";
                }

                $status = $rowBook['status'];
                if ($status == 1) {
                    $tStatus = "Booked";
                }
                if ($status == 2) {
                    $tStatus = "In Service";
                }
                if ($status == 3) {
                    $tStatus = "Fixed / Completed";
                }
                if ($status == 4) {
                    $tStatus = "Collected";
                }
                if ($status == 5) {
                    $tStatus = "Unrepairable / Scrapped";
                }

            ?>

                <tr>
                    <td><?php echo $rowBook['id_booking']; ?></td>
                    <td><?php echo $rowUser['first_name']; ?> <?php echo $rowUser['last_name']; ?></td>
                    <td><?php echo $rowVeh['vehicle_registration']; ?></td>
                    <td><?php echo $rowBook['date']; ?></td>
                    <td><?php echo $tSlot; ?></td>
                    <td><?php echo $tStatus; ?></td>


                </tr>

            <?php } ?>


        </table>



    </div><!--illing-->



</body>

</html>