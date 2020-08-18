<?php
include('../conn.php');

if (!isset($_SESSION['isAdm'])) {
    header("Location: ../login.php");
}

$sqlCustomer = "SELECT * FROM user";

$resultCustomer = mysqli_query($conn, $sqlCustomer);


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
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <!-- style-->

    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>

</head>

<body>
    <div class="billing">
        <div class="grid-container">
            <div class="btn_return"><button onclick="window.location.href='../admin/dashboard.php';"> Go back </button>
            </div>
            <!--btn_return-->



        </div>
        <!--grid-->
        <h2 style="text-align: center;"> List of Customers</h2>


        <table class="table center table-striped table-class" id="table-id" style="text-align: center;">

            <tr>
                <th>User ID</th>
                <th>Email</th>
                <th>Name</th>               
                <th>Phone</th>
                <th>DOB</th>
                <th>Adress</th>
                <th>Adress</th>
                <th>Eircode</th>
                <th>Info</th>


            </tr>


            <!--header-->

            <?php
            while ($rowCustomer = mysqli_fetch_array($resultCustomer)) {

                $sqlUser = "SELECT * FROM user WHERE id_user = " . $rowCustomer['id_user'] . " ";
                $resultUser = mysqli_query($conn, $sqlUser);
                $rowUser = mysqli_fetch_array($resultUser);



            ?>

                <tr>
                    <td><?php echo $rowUser['id_user']; ?></td>
                    <td><?php echo $rowUser['email']; ?></td>
                    <td><?php echo $rowUser['first_name']; ?> <?php echo $rowUser['last_name']; ?></td>
                    <td><?php echo $rowUser['phone']; ?></td>
                    <td><?php echo $rowUser['birthday']; ?></td>
                    <td><?php echo $rowUser['address']; ?></td>
                    <td><?php echo $rowUser['address2']; ?></td>
                    <td><?php echo $rowUser['eircode']; ?></td>
                    <td><?php echo $rowUser['info']; ?></td>


                </tr>

            <?php } ?>


        </table>
        <!--table table-striped table-class-->



    </div><!--billing-->



</body>

</html>