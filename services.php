<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--characther set -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--setting scale for mabile devices-->

    <title>Ger's Garage</title>

    <!-- style-->
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>

    <!-- style-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--script-->

</head>
<body>


    <!-- Navigation BAR -->
    <nav class="navbar  navbar-expand-md navbar-dark bg-dark sticky-top">
        <!--md because its the breakpoint where it gonna change from the mobile to expanded nav-->

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-sm-center" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="services.php">Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='us.php'> About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='contact.php'> Contact </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='booking.php'>Book our services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='profile.php'>Profile</a>
                    </li>

                    <li class=" nav-item">
                        <a class="nav-link" href='#'>Login/Register</a>
                    </li>
                </ul>

            </div>
            <!--collapse navbar-collapse justify-content-sm-center-->
        </div>
        <!--container-fluid-->
    </nav>
    <!--NavBar-->

    <div class="container service">
        <div class="row">

            <div class="col-md-4">
                <div class="box-part text-center">
                    <i class="fas fa-spray-can fa-5x"></i>
                    <h2>Paiting</h2>
                    <p>We apply paint to refresh your vehicle's appearance. Our Service offers a one-year warranty, and gives your car an attractive gloss and accurate color match.</p>
                </div>
                <!--/.box-part-->
            </div>
            <!-- /.col-lg-4 -->

            <div class="col-md-4">
                <div class="box-part text-center">
                    <i class="fas fa-car-crash fa-5x"></i>
                    <h2>Repair/fault</h2>
                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </div>
                <!--/.box-part-->

            </div>
            <!-- /.col-lg-4 -->

            <div class="col-md-4">
                <div class="box-part text-center">
                    <i class="fas fa-calendar-check fa-5x"></i>
                    <h2>Annual Service</h2>
                    <p>Programme your annual maintenance. Recommended every 12,000 miles or 12 months.</p>
                </div>
                <!--/.box-part-->
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-4">
                <div class="box-part text-center">
                    <i class="fas fa-tools fa-5x"></i>
                    <h2>Major Repair</h2>
                    <p>The Full Service is among the most comprehensive annual services available, comprising 75 individual maintenance checks. It exceeds the recommendations made by most manufacturers of checks, refills and replacements to be performed
                        annually and will help ensure trouble-free motoring.</p>
                    <br>
                    <p>Recommended interval: 12 months or 12,000 miles</p>
                </div>
                <!--/.box-part-->
            </div>
            <!-- /.col-lg-4 -->

            <div class="col-md-4">
                <div class="box-part text-center">
                    <i class="fas fa-cogs fa-5px"></i>
                    <h2>Major service</h2>
                    <p>The Major Service is our most comprehensive car service which includes everything needed in an annual Service. In addition, we change parts recommended for replacement every two years including a brake fluid change.
                    </p>
                    <br>
                    <p> Recommended interval: 24 months or 24,000 miles.</p>
                </div>
                <!--/.box-part-->
            </div>
            <!-- /.col-lg-4 -->

            <div class="col-md-4">
                <div class="box-part text-center">
                    <i class="fas fa-key fa-5px"></i>
                    <h2>Pick up</h2>
                    <p>Programme your annual maintenance. Recommended every 12,000 miles or 12 months.</p>
                </div>
                <!--/.box-part-->
            </div>
            <!-- /.col-lg-4 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container service -->


</body>


</html>