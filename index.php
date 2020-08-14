<!DOCTYPE html>
<html lang="en">
<!--ERROR- ADICIONAR ANIMAÇÃO NAS LETRAS GER'S
hoover não esta funcionando na nav bar"-->

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
    body {
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Service</a>
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

    <div class="banner">
        <!--image on the background, Title with visual effect-->

        <div class="inner">

            <p>Ger's Garage</p>

        </div>
        <!--inener-->

        <div class="slogan">
            <img src="img/sample.JPG" alt="Garage slogan">

        </div>
        <!--slogan-->

    </div>
    <!--Banner-->

</body>
</html>