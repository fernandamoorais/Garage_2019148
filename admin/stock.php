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
            <div class="btn_return"><button onclick="window.location.href='../admin/dashboard.php';"> Go back </button>
            </div>
            <!--btn_return-->
            <div class="skip"></div>

            <div class="btn_add"> <button onclick="window.location.href='../admin/product.php';">Add a new product</button>
            </div>
            <!--btn_invoice-->
        </div>
        <!--grid-cointainer-->


        <div class="header_wrap">
            <div class="num_rows">
               
            </div>
            <!--num_rows-->
            <?php
            if(isset($_POST['submit'])){
                            $connection = mysqli_connect("localhost", "root", "", "ger_garage");
                    $find=$connection->real_escape_string($_POST['find']);
                $column=$connection->real_escape_string($_POST['column']);

            if($column==""|| ($column!="product_ID" && ($column!="product_name" && ($column!="product_type" &&($column!="brand"))  
            $column= "product_ID";

        $query="SELECT product_ID from product WHERE $column LIKE'%find%'";
        $sql = $connection->query($query);
        if ($sql->num_rows>0){
            while ($data = $sql->fetch_assoc()) {
                echo "<tr><td>" . $row["product_ID"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["product_type"] . "</td><td>" . $row["product_quantity"] . "</td><td>" . $row["product_price"] . "</td><td>" . $row["product_description"] . "</td><td>" . $row["stockable"] . "</td></tr>";
            }
        }else
        echo"Your Search doesn't match any data"
            }
        
                        
                        ?>

            <form method="post" action="">

                <input type="text" name="find" placeholder="Search...." />
                <select>
                    <option value=""> Select filter</option>
                    <option value="product_ID"> ID</option>
                    <option value="product_name"> Name</option>
                    <option value="product_type"> Type</option>
                    <option value="brand"> Brand</option>
                </select>

                <input type="submit" name="submit" value="Submit" />

            </form>

        </div>
        <!--./"header_wrap "-->

        <section>
            <div class="employee">
                <h2 style="text-align: center;">Search product </h2>


                <!--    if (!empty($_REQUEST['product_ID'])) {

                    $sql = "SELECT * FROM product WHERE product_ID LIKE '$product_ID'";
                    $result = $connection->query($sql);

                    if ($result === TRUE) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["product_ID"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["product_type"] . "</td><td>" . $row["product_quantity"] . "</td><td>" . $row["product_price"] . "</td><td>" . $row["product_description"] . "</td><td>" . $row["stockable"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 result";
                    }
                    mysqli_close($connection);
                }

                ?>-->
                <table class="table center table-striped table-class " id="table-id">

                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product type</th>
                        <th>Brand</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>In stock</th>

                    </tr>
                    <?php


                    $connection = mysqli_connect("localhost", "root", "", "ger_garage");
                    if ($connection->connect_error) {
                        die("Connection Failed:" . $connection->connect_error);
                    }
                    $sql = "SELECT * FROM product";
                    $result = $connection->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["product_ID"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["product_type"] . "</td><td>" . $row["brand"] . "</td><td>" . $row["product_quantity"] . "</td><td>" . $row["product_price"] . "</td><td>" . $row["product_description"] . "</td><td>" . $row["stockable"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    $connection->close();

                    ?>
                </table>



            </div>
            <!--./div employee-->
        </section>
        <!---./ staff list-->

        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination ">
                    <!-- the JS Function Will Add the Rows here -->
                </ul>
            </nav>
        </div>
        <!--pagination-container-->

        <div class="rows_count ">Showing 11 to 20 of 91 entries</div>
        <!--rows_count-->

    </div>



</body>

</html>