<?php
include('../conn.php');

if (!isset($_SESSION['isAdm'])) {
    header("Location: ../login.php");
}

//employee=supply
$sqlSupply = "SELECT * FROM product";
$resultSupply = mysqli_query($conn, $sqlSupply);


?>
<!DOCTYPE html>
<html lang="en">
<!--ERROR- ideia quando eu insiro um produto e a quantidade no invoice é possivel ja subtrair automaticamente da tabela produtos?-->

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

        <div class="btn_add">
            <button onclick="window.location.href='../admin/product.php';"> Add a product</button>
        </div>
    </div>
    <section>
        <div>
            <?php
            if (isset($_GET['find'])) {

                $find = mysqli_real_escape_string($connection, $_GET['find']);

                $sql = "SELECT * FROM product WHERE product_id LIKE '%find%' OR  product_name LIKE '%find%' OR product_type LIKE '%find%' OR product_quantity LIKE '%find%' OR product_brand LIKE '%find%'";

                $result = mysqli_query($connection, $sql);
                $queryResult = mysqli_num_rows($result);

                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["product_id"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["product_type"] . "</td><td>" . $row["product_quantity"] . "</td><td>" . $row["product_brand"] . "</td></tr>";
                    }
                } else {
                    echo "Your Search doesn't match any data";
                }
            }
            ?>
            <form method="post" action="">
            <input type="text" name="find" placeholder="Search....">
               
                <select name="find">
                    <option value=""> Select filter</option>
                    <option value="product_id"> ID</option>
                    <option value="product_name"> Name</option>
                    <option value="product_type"> Type</option>
                    <option value="product_type"> Brand</option>
                </select>

                <input type="submit" name="submit" value="find" />

            </form>

        </div>
        <!--./"header_wrap "-->
        


        <section>
            <div class="billing">
                <h2 style="text-align: center;"> List of Products</h2>
                <table class="table center table-striped table-class" id="table-id" style="text-align: center;">

                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Quantity</th>




                    </tr>



                    <?php
                    while ($rowSupp = mysqli_fetch_array($resultSupply)) {

                        $sqlProduct = "SELECT * FROM product WHERE product_id = " . $rowSupp['product_id'] . " ";
                        $resultProduct = mysqli_query($conn, $sqlProduct);
                        $rowProduct = mysqli_fetch_array($resultProduct);





                    ?>

                        <tr>
                            <td><?php echo $rowProduct['product_id']; ?></td>
                            <td><?php echo $rowProduct['product_name']; ?></td>
                            <td><?php echo $rowProduct['product_price']; ?> </td>
                            <td><?php echo $rowProduct['product_brand']; ?></td>
                            <td><?php echo $rowProduct['product_type']; ?></td>
                            <td><?php echo $rowProduct['product_quantity']; ?></td>




                        </tr>

                    <?php } ?>


                </table>
                <!--table table-striped table-class-->



            </div>



</body>

</html>