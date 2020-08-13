<!DOCTYPE html>
<html lang="en">
<!--ERROR: essa pagina pode somente ser acessada por admin
aqui o admin pode criar staff
update staff info
-->
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
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.513);
        }

        .employee table {
            border: 6px solid #144d55f8;
            margin-top: 25px;
            margin-right: 70px;
            margin-bottom: 100px;
            background-color: #5ccfdff8;
            width: 100%;
            text-align: center;
        }

        .employee table td,
        th {
            border: 1px solid #238b997c;

            padding: 4px 4px;
        }

        .employee table tbody td {
            font-size: 16px;
        }

        .employee table th {
            background: #238b997c;
            ;
            background: -moz-linear-gradient(top, #afa396 0%, #9e9081 66%, #948473 100%);
            background: -webkit-linear-gradient(top, #afa396 0%, #9e9081 66%, #948473 100%);
            background: linear-gradient(to bottom, #2fb7c87c 0%, #3ea8b6ab 66%, #238b997c 100%);
        }

        .employee table head th {
            font-size: 17px;
            font-weight: bold;
            color: #F0F0F0;
            text-align: left;
            border-left: 2px solid #238b997c;
            ;
        }

        .employee table head th:first-child {
            border-left: none;
        }

        .employee form input.search {
            background: #f3f3f3;
            border: 1px solid #304173;
            border-radius: 1000px;
            box-shadow: 2px 2px #444444;
            width: 500px;
            height: 30px;
            color: black;
            display: inline-block;
            font: normal bold 15px/20px 'Montserrat Alternates', sans-serif;
            text-align: center;
            position: relative;


        }

        .employee form {
            margin-left: 30px;
            padding-left: 310px;
            border-radius: 25px;
            margin-bottom: 30px;
        }

        #popup {
            display: none;

        }

        #popup form.new {
            padding-left: 200px;
            margin-left: 120px;
            margin-right: 280px;
        }

        button.btn_staff,
        #popup button.btn_staff {
            margin-top: 30px;
            background: #ffffff;
            margin-bottom: 25px;
            background-color: #238b997c;
            border-radius: 1000px;
            box-shadow: 4px 4px #444444;
            padding: 10px 20px;
            color: #000000;
            display: inline-block;
            font: bold 18px/1 "Open Sans", sans-serif;
            text-align: center;

        }

        .new {
            background-color: white;

            margin-left: 200px;
            margin-right: 280px;
            border: 1px solid #000000;
            box-shadow: 3px 2px 2px 2px #444444;

        }
    </style>
</head>

<body>
    <div class="row">
        <div>
            <button class="btn_staff" onclick="document.getElementById('popup').style.display='block'"> Create staff</button>
        </div>
        <div class="btn_return">
            <button onclick="window.location.href='../admin/dashboard.html';">Go back </button>
        </div>

    </div>
    <section>


        <div id="popup">

            <form action="" method="post">
                <div class="new" style="text-align: center;">
                    <div class="staff_info">
                        <h2>ID</h2>
                        <input type="text" name="staff_ID" placeholder="ID" style="width: 50%;border-radius: 20px;height: 20px;">
                    </div>
                    <!---ID-->

                    <div class="staff_info">
                        <h2>Email</h2>
                        <input type="text" name="email" placeholder="E-mail" style="width: 78%;border-radius: 20px;height: 20px;">
                    </div>
                    <!--email-->


                    <div class="staff_info">
                        <h2>Password</h2>
                        <input type="text" name="password" placeholder="password" style="width: 78%;border-radius: 20px;height: 20px;">
                    </div>
                    <!--password-->

                    <div class="staff_info">
                        <h2>Confirm Password</h2>
                        <input type="text" name="password2" placeholder="Confirm password" style="width: 78%;border-radius: 20px;height: 20px;">
                    </div>
                    <!--./password2-->

                    <div class="staff_info ">
                        <h2>First name</h2> <input type="text " name="staff_name" placeholder="First Name" style="width: 78%;border-radius: 20px;height: 20px;">
                    </div>
                    <!--staff_name-->

                    <div class="staff_info ">
                        <h2>Surname</h2> <input type="text " name="staff_second" placeholder="Last Name" style="width: 78%;border-radius: 20px;height: 20px;">
                    </div>
                    <!--staff_secon-->

                    <div class="staff_info ">
                        <h2>Address</h2> <input type="text " name="staff_address" placeholder="Address line 1" style="width: 78%;border-radius: 20px;height: 20px;">
                    </div>
                    <!--staff_adress-->

                    <div class="staff_info ">
                        <h2>Birthday</h2>
                        <div class="DOB ">
                            <label for="DOB ">Birthday:</label>
                            <input type="date" id="DOB " name="birthday ">

                        </div>

                    </div>
                    <!--DOB-->

                    <div class="staff_info ">
                        <h2>Phone</h2><input type="text" name="staff_phone" placeholder="Phone" style="border-radius: 25px;height: 20px;">
                    </div>
                    <!--PHONe-->


                    <div class=" row">
                        <div class="staff_info ">
                            <h2>Start date</h2> <input type="date" name="from_date" style="border-radius: 25px;height: 20px;">
                        </div>
                        <!--from date-->


                        <div class=" column staff_info ">
                            <h2>End date</h2> <input type="date" name="staff_second" style=" border-radius: 25px;height: 20px;">
                        </div>
                        <!--./end date-->
                    </div>
                    <!--row-->

                    <h2>User type</h2>
                    <div class=" column staff_info" style="border-radius: 10px;height: 30px;">
                        <select id="user_type" name="staff_type" class="form-control">
                            <option value="1">user</option>
                            <option value="2">staff</option>
                            <option value="3">adm</option>
                        </select>
                    </div>
                    <!--user_type-->


                    <div class="staff_info " style="border-radius: 25px;height: 30px;">
                        <h2>Salary</h2><input type="text" name="salary">
                    </div>

                    <div class="staff_info " style="border-radius: 25px;height: 30px;">
                        <h2>Daily hourys</h2><input type="text" name="daily_hours" placeholder="">
                    </div>

                    <div>

                        <?php

                        // Credentials
                        $dbhost = 'localhost';
                        $dbuser = 'root';
                        $dbpass = '';
                        $dbname = 'ger_garage';

                        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                        if (isset($_POST['submit'])) { // Fetching variables of the form which travels in URL
                            $staff_email = $POST['staff_email'];
                            $staff_ID = $POST['staff_ID'];
                            $password = $POST['password'];
                            $password2 = $POST['password2'];
                            $staff_name = $POST['staff_name'];
                            $staff_second = $POST['staff_second'];
                            $staff_address = $POST['staff_address'];
                            $DOB = $POST['DOB'];
                            $staff_phone = $POST['staff_phone'];
                            $from_date = $POST['from_date'];
                            $end_date = $POST['end_date'];
                            $staff_type = $POST['staff_type'];
                            $salary = $POST['salary'];
                            $daily_hours = $POST['daily_hours'];

                            if ($password != $password2) {
                                array_push($errors, "The two passwords do not match");
                            }
                            // register user if there are no errors in the form
                            if (count($errors) == 0) {
                                $password = md5($password); //encrypt the password before saving in the database

                                if ($staff_email != '' || $staff_ID != '') {
                                    //Insert Query of SQL
                                    $sql = "INSERT INTO staff (staff_email, staff_ID, password, password2,staff_name, staff_second, staff_address, DOB, staff_phone, from_date,end_date, staff_type, salary,daily_hours ) values('$staff_email', '$staff_ID', '$password', '$password2','$staff_name', '$staff_second', '$staff_address', '$DOB', '$staff_phone', '$from_date','$end_date', '$staff_type', '$salary','$daily_hours')";
                                }
                            }
                        }

                        ?>
                        <div class="row">
                            <div class="column">
                                <input class="submit" name="submit" type="submit" value="Insert">

                            </div>
                            <div class="column"> 
                                <button class="btn_staff" onclick="document.getElementById('popup').style.display='none'">Hide</button>
                            </div>
                        </div>
                    </div>
            </form>
    </section>
    <!--./create new staff-->


    <section>
        <div class="employee">
            <h2 style="text-align: center;">Search employee by ID </h2>

            <form method="post">

                <br> ID: <input class="search" type="text" name="staff_ID">

                <input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="Submit" />

            </form>


            <?php

            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'ger_garage';

            $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if (!empty($_REQUEST['staff_ID'])) {

                $sql = "SELECT * FROM staff WHERE staff_ID LIKE '$staff_ID'";
                $result = $connection->query($sql);

                if ($result === TRUE) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["staff_ID"] . "</td><td>" . $row["staff_email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["staff_name"] . "</td><td>" . $row["staff_second"] . "</td><td>" . $row["staff_address"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["staff_phone"] . "</td><td>" . $row["staff_phone"] . "</td><td>" . $row["from_date"] . "</td><td>" . $row["end_date"] . "</td><td>" . $row["staff_type"] . "</td><td>" . $row["salary"] . "</td><td>" . $row["daily_hours"] . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 result";
                }
                mysqli_close($connection);
            }

            ?>
            <table>
                <div style="text-align: center;">
                    <th>ID</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>First name</th>
                    <th>Second name</th>
                    <th>Adress</th>
                    <th>DOB</th>
                    <th>Phone</th>
                    <th>From date</th>
                    <th>End date</th>
                    <th>Staff type</th>
                    <th>Salary</th>
                    <th>Daily hours</th>

                </div>
                <!--head of table-->




            </table>
            <!--./table staff-->
        </div>

    </section>
    <!---./ staff list-->

</body>

</html>
