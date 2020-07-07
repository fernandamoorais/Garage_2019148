<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--characther set -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--setting scale for mabile devices-->
    <title>Ger's Garage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/solid.min.css" rel="stylesheet">
    <link href= "css/newstyle.css" rel= "stylesheet" type="text/css"/><!-- style-->
    <script type="text/javascript" src="java.js"></script>
    <script>
        $(document).ready(function(){
          $("#home").click(function(){
            $("a").slideToggle("slow");
          });
          $("#service").click(function(){
            $("a").slideToggle("slow");
          });
        });
        </script>

</head>

<body>
    <!-- Navigation BAR -->
    <!--centralizar menu-->
<section class="Nav">
    <nav class="navbar  navbar-expand-md navbar-dark bg-dark sticky-top">
        <!--md because its the breakpoint where it gonna change from the mobile to expanded nav-->
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="***"><img scr="***"></a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav md-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#aboutUs'> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#contact'> Contact </a>
                    </li>
                </ul>
                <span class="navbar-nav ">
                    <a class="nav-link" href='login.html'>Login</a>
                </span>
            </div>
        </div>
    </nav>
</section>

    <!--- Image Slider -->
    <a id="home">
    <div id="slides" class="carousel slide" data-ride="carousel">
        <!--scroll function of carrosel/carousel indicators-->
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">

            <div class="carousel-item active ">
                <img src="img/carrosel_1.jpg" width="1500" height="300">
                <div class="carousel-caption">
                    <h1 class="display-2">Book a service </h1>
                    <h3>description</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">Sign up</button>
                    <button type="button" class="btn btn-secondary btn-lg"> Login in</button>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="img/carrosel_2.jpg" width="1500" height="300">
                <div class="carousel-caption">


                    <button type="button" class="btn btn-success btn-lg"> Listen on Spotify</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carrosel_3.jpg" width="1500" height="300">
            </div>

        </div>
    </div>
    <!--- Slogan -->

    <div id="slogan">
        <img src="img/slogan.jpg" width="1500" height="300">
    </div>
</a>


    <!---Service Section -->
    <a id="service">
        <div class="container-fluid padding bg-dark text-white">
            <div class="row service text-center">
                <div class="col-12">
                    <h1>Services</h1>
                </div>
                <hr>
                <div class="col-12">
                    <p class="lead">Some introduction</p>
                </div>
            </div>
</a>
            <!--- Three Column Section/ first line -->
            <div class="container-fluid padding">
                <div class="row text-center padding">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <!--display adjustment -->

                        <img src="img/major-repair-icon.jpg" width="180" height="150">
                        <h3>MAJOR REPAIR</h3>
                        <p> description</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="img/major-service-icon.jpeg" width="200" height="150">
                        <h3>MAJOR SERVICE</h3>
                        <p> description</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="img/paint icon.jpg" width="150" height="150">
                        <h3>PAITING</h3>
                        <p> description</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="img/pick-icon.png" width="200" height="150">
                        <h3>PICK UP</h3>
                        <p> description</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="img/anual-service-icon.jpg" width="150" height="150">
                        <h3>ANNUAL SERVICE</h3>
                        <p> description</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="imG/repair-fault-icon.jpg" width="150" height="140">
                        <h3>REPAIR AND FAULT</h3>
                        <p> description</p>
                    </div>
                </div>
                <hr class="my-4">
            </div>
        </div>
    

    <!--- Three Column Section/second line -->


    <!--- Fixed background -->