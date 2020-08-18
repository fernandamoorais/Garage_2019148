<?php
include('../conn.php');

if (!isset($_SESSION['isAdm'])) {
    header("Location: ../login.php");
}

$NewDate = Date('Y-m-d', strtotime('+14 days'));
$sqlBook = "SELECT * FROM booking WHERE date <= '" . $NewDate . "' ";

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

    <!--ERROR: não ets ainportando -->
    <!--<link href="../css/admin.css" rel="stylesheet" type="text/css">-->

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <!-- style-->

    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>

</head>

<body>
    <div class="billing">
        <div class="grid-container">
            <div class="btn_return"><button onclick="window.location.href='../admin/dashboard.php';"> Go back to Menu </button>
            </div>
            <!--btn_return-->
            <div class="skip"></div>

        </div>
        <!--grid-->

        <div class="header_wrap">
            
        </div>
        <!--./"header_wrap "-->

        <table class="table center table-striped table-class" id="table-id" style="text-align: center;">

            <tr>
                <th>Booking ID</th>
                <th>Name</th>
                <th>Vehicle Registration</th>
                <th>Vehicle ID</th>
                <th>date</th>
                <th>Hour</th>
                <th>Status</th>
                <th>action</th>


            </tr>


            <!--header-->

            <?php
            while ($rowBook = mysqli_fetch_array($resultBook)) {
                //selecting data from different tables
                

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
                    $tStatus = "Fixed / Completed ";
                }
                if ($status == 4) {
                    $tStatus = "Collected ";
                }
                if ($status == 5) {
                    $tStatus = "Unrepairable / Scrapped ";
                }

            ?>

                <tr>
                    <td><?php echo $rowBook['id_booking']; ?></td>
                    <td><?php echo $rowUser['first_name']; ?> <?php echo $rowUser['last_name']; ?></td>
                    <td><?php echo $rowVeh['vehicle_registration']; ?></td>
                    <td><?php echo $rowBook['id_vehicle']; ?></td>
                    <td><?php echo $rowBook['date']; ?></td>
                    <td><?php echo $tSlot; ?></td>
                    <td><?php echo $tStatus; ?></td>
                    <td>[<a href="bookingDetails.php?id=<?php echo $rowBook['id_booking']; ?>">Details</a>]</td>


                </tr>

            <?php } ?>


        </table>
        <!--table table-striped table-class-->

        

    </div>



</body>

</html>