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
            <div class="btn_return"><button onclick="window.location.href='../admin/dashboard.php';"> Go back </button> </div>
            <!--btn_return-->

            <div class="skip"></div>

            <div class="btn_add"> <button onclick="window.location.href='../admin/receipts.php';">Create a invoice</button> </div>
            <!--btn_invoice-->
        </div>
        <!--grid-->

        <div class="header_wrap">
            

        </div>
        <!--./"header_wrap "-->

        <table class="table center table-striped table-class " id="table-id">

            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Invoice</th>
                <th>Date of payment</th>
               

            </tr>


            <!--header-->



            <tr>
                <td>1</td>
                <td>1</td>
                <td>Rajah Armstrong</td>
                <td>erat.neque@noncursusnon.ca</td>
                <td>Rajah Armstrong</td>
                <td>erat.neque@noncursusnon.ca</td>
            </tr>

        </table>
        <!--table table-striped table-class-->


    </div>
    <!--Container -->


</body>

</html>