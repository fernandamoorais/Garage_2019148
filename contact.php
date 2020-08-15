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


    <style>
        hr.new1 {
            border-top: 1px solid white;
        }
        body{
            background-color: rgb(35, 35, 35);

        }
    </style>
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
                        <a class="nav-link" href="services.php">Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='us.php'> About Us</a>
                    </li>

                    <li class="nav-item active">
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

    <div class="container contact">

        <header>
            <h2>Contact us</h2>
        </header>
        <hr class="new1">
        <br>
        <br> 

        <div class="content">

            <div class="row">
                <!--https://mdbootstrap.com/docs/jquery/javascript/google-maps/-->


                <div class="col-md-6 mb-4">


                    <div class="card card-cascade narrower">


                        <div class="card-body card-body-cascade text-center">


                            <div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height: 300px">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.84427303271!2d-6.261063984718505!3d53.34604378243583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e84cfcc9cbf%3A0x689c7d1c132a0ddf!2sCCT%20College%20Dublin!5e0!3m2!1sen!2sie!4v1595083999595!5m2!1sen!2sie"
                                    width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <!--Google map-->

                        </div>
                        <!--Card body-->


                    </div>
                    <!--/.Card card-->

                </div>
                <!--"col-md-6 mb-4">-->



                <div class="col-md-6 mb-4">

                    <div class="card card-cascade narrower">

                        <div class="card-body card-body-cascade text-center">

                            <!--Google map-->
                            <div class="Contact_us">
                                <p><i class="fas fa-map-pin"></i> 30-34 Westmoreland St, Dublin 2,
                                    <br> D02 HK35</p>
                            </div>
                            <div class="Contact_us">
                                <p><i class="fa fa-phone fa-lg"></i> +01 54892 945 - +01 84238 548
                                </p>
                            </div>
                            <div class="Contact_us">
                                <p><i class="fa fa-envelope fa-lg"></i> gergarages@garage.ie
                                </p>
                            </div>
                            <div class="Contact_us">
                                <p><i class="fa fa-clock fa-lg" aria-hidden="true"></i> Sunday: closed
                                    <br> Monday - Wednesday: 9am -6 pm
                                    <br> Thursday - Saturday: 8am - 5pm
                                </p>
                            </div>

                        </div>
                        <!--Card body-->

                    </div>
                    <!--/.Card card-->

                </div>
                <!--col-md-6 mb-4-->

            </div>
            <!--row-->
        </div>
        <!--content-->
    </div>   <!--./container contact-->

</body>

</html>