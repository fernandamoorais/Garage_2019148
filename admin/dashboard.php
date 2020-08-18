<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--characther set -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--setting scale for mabile devices-->

    <title>Ger's Garage ADM </title>

  
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <!-- style-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
<style>
    body{
        background-color: #1D1D1D;
    }
</style>
</head>

<body>

    <div class="dashboard">
        <div class="content">

        <a href="../admin/staff.php">
                <div class="card">

                    <div class="icon"><i class="fas fa-home fa-2x"></i></div>
                    <p class="title">Staff</p>
                    <p class="text">Staff info</p>

                </div>
                <!-- end card -->
            </a>
            <!--./a staff-->

        <!-- card -->
            <a href="../admin/admbooking.php">
                <div class="card">

                    <div class="icon"><i class="far fa-calendar-alt fa-2x"></i></div>
                    <p class="title">Bookings</p>
                    <p class="text">Check the calendar.</p>

                </div>
                <!-- end card -->
            </a>
            <!--./a bookins-->

            <a href="../admin/receipts.php">
                <div class="card">

                    <div class="icon"><i class="fas fa-file-invoice-dollar fa-2x"></i></div>
                    <p class="title">Invoices</p>
                    <p class="text">Billings, products invoice</p>

                </div>
                <!-- end card -->
            </a>
            <!--./a bookins-->

        </div>
        <!--./content-->

        <div class="content">
            <!-- card -->
            <a href="../admin/customer.php">
                <div class="card">

                    <div class="icon"><i class="fas fa-list fa-2x"></i></div>
                    <p class="title">Customer</p>
                    <p class="text">Customer list</p>

                </div>
                <!-- end card -->
            </a>
            <!--./a profile-->

            <!-- card -->
            <a href="../admin/stock.php">
                <div class="card">

                    <div class="icon"><i class="far fa-chart-bar fa-2x"></i></div>
                    <p class="title">Inventory</p>
                    <p class="text">Products inventory.</p>

                </div>
                <!-- end card -->
            </a>
            <!--./a bookins-->

           
            <a href="../logout.php">
                <div class="card">

                    <div class="icon"><i class="fas fa-sign-out-alt fa-2x"></i></div>
                    <p class="title">LOGOUT</p>
                    <p class="text">EXIT SYSTEM</p>

                </div>
                <!-- end card -->
            </a>
            <!--./a logout-->

        </div>
    </div>
    <!--./ dashboard-->


</body>

</html>