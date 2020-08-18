<?php
include('../conn.php');

if (!isset($_SESSION['isAdm'])) {
    header("Location: ../login.php");
}


$sqlEmployee = "SELECT * FROM employee";
$resultEmployee = mysqli_query($conn, $sqlEmployee);


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
    <div class="row">
       
        <div class="btn_return">
            <button onclick="window.location.href='../admin/dashboard.php';">Go back </button>
        </div>

    </div>
    <section>


       


    <section>
        <div class="billing">
        <h2 style="text-align: center;"> List of Staff</h2>
            <table class="table center table-striped table-class" id="table-id" style="text-align: center;">

                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>PPS</th>
                    <th>Address</th>
                    <th>Eircode</th>
                    <th>Salary</th>
                    <th>DOB</th>
                    <th>From</th>
                    <th>end date</th>


                </tr>



                <?php
                while ($rowSta = mysqli_fetch_array($resultEmployee)) {

                    $sqlStaff = "SELECT * FROM employee WHERE id_employee = " . $rowSta['id_employee'] . " ";
                    $resultStaff = mysqli_query($conn, $sqlStaff);
                    $rowStaff = mysqli_fetch_array($resultStaff);





                ?>

                    <tr>
                        <td><?php echo $rowStaff['id_employee']; ?></td>
                        <td><?php echo $rowStaff['name']; ?> </td>
                        <td><?php echo $rowStaff['staff_email']; ?></td>
                        <td><?php echo $rowStaff['PPS']; ?></td>
                        <td><?php echo $rowStaff['staff_address']; ?></td>
                        <td><?php echo $rowStaff['staff_eircode']; ?></td>
                        <td><?php echo $rowStaff['salary']; ?></td>
                        <td><?php echo $rowStaff['DOB']; ?></td>
                        <td><?php echo $rowStaff['from_date']; ?></td>
                        <td><?php echo $rowStaff['end_date']; ?></td>


                    </tr>

                <?php } ?>


            </table>
            <!--table table-striped table-class-->



        </div>



</body>

</html>