<?php
include('../conn.php');

if (!isset($_SESSION['isAdm'])) {
    header("Location: ../login.php");
}


$sqlSupply = "SELECT * FROM product";
$resultSupply = mysqli_query($conn, $sqlSupply);


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

    <body>
        <div class="row">

            <div class="btn_return">
                <button onclick="window.location.href='../admin/dashboard.php';">Go back </button>
            </div>

        </div>
        <section>



            <section>
                <div class="billing">
                <h2 style="text-align: center;"> List of Product</h2>

                    <table class="table center table-striped table-class" id="table-id" style="text-align: center;">

                        <tr>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Type</th>
                            <th>Quantity</th>
                            <th>info</th>



                        </tr>



                        <?php
                        while ($rowSupp = mysqli_fetch_array($resultProduct)) {

                            $sqlProduct = "SELECT * FROM product WHERE product_id = " . $rowSupp['product_id'] . " ";
                            $resultProduct = mysqli_query($conn, $sqlProduct);
                            $rowProduct = mysqli_fetch_array($resultProduct);





                        ?>

                            <tr>
                                <td><?php echo $rowStaff['product_id']; ?></td>
                                <td><?php echo $rowStaff['product_name']; ?></td>
                                <td><?php echo $rowStaff['product_price']; ?> </td>
                                <td><?php echo $rowStaff['product_brand']; ?></td>
                                <td><?php echo $rowStaff['product_type']; ?></td>
                                <td><?php echo $rowStaff['product_quantity']; ?></td>
                                <td><?php echo $rowStaff['info']; ?></td>



                            </tr>

                        <?php } ?>


                    </table>
                    <!--table table-striped table-class-->



                </div>



    </body>

</html>

</body>

</html>