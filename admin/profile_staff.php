<?php include('../server.php');




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--characther set -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--setting scale for mabile devices-->

    <title>Ger's Garage ADM</title>

    <!-- style-->
    <link href="fontawesome/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.513);
        }
    </style>
</head>

<body>
    <div class="btn_return">
        <button onclick="window.location.href='../admin/dashboard.php';">
        Go back
      </button>
    </div>
    <div class="staff">
        <h1>Personal information</h1>
        <p> echo $staff_id</p>
        <div class="staff_info">
            <h2>email</h2>
            <input type="text" name="email" placeholder="E-mail" style="width: 78%;"></div>

        <div class="staff_info ">
            <h2>First name</h2> <input type="text " name="staff_name" placeholder="First Name " style="width: 78%;">
        </div>
        <div class="staff_info ">
            <h2>Surname</h2> <input type="text " name="staff_second" placeholder="Last Name" style="width: 78%;"></div>
        <div class="staff_info ">
            <h2>Address</h2> <input type="text " name="address" placeholder="Address line 1" style="width: 78%;"></div>
        <div class="staff_info ">
            <div class="staff_info ">
                <h2>Phone</h2><input type="text " name="staff_phone" placeholder="Phone"></div>
            <div class="staff_info ">
                <h2>Birthday</h2>
                <div class="DOB ">
                    <label for="DOB ">Birthday:</label>
                    <input type="date " id="birthday " name="birthday ">

                </div>
            </div>
            <!--DOB-->
            <div class="staff_info ">
                <h2>Start date</h2>
                <p> from date</p>
            </div>
            <div class="staff_info ">
                <h2>Role</h2>
                <p>staff_type</p>
            </div>


        </div>
</body>

</html>