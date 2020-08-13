<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <!--ERROR: como salvar info de mais de um carro pro mesmo usuario?-->

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
    >
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
            <!-- <a class="navbar-brand" ><img scr="img/sample.jpg"></a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-sm-center" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='us.html'> About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='contact.html'> Contact </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='login.html'>Book a service</a>
                    </li>

                    <!--acesso somente depois de logar  LOGIN-->
                    <li class="navbar-nav">
                        <a class="nav-link" href='booking.html'>Book our services</a>
                    </li>

                    <li class="navbar-nav">
                        <a class="nav-link" href='profile.html'>Profile</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!-- multistep form -->
    <div class="registration">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Account Setup</li>
                <li>Personal Details</li>
                <li> Car Details</li>
            </ul>

            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle"></h3>
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" value="brightcode" placeholder="Password">
                <input type="password" name="password2" value="brightcode" placeholder="Confirm Password">
                <input type="button" name="next" class="next action-button" value="Next">


            </fieldset>
            <!--./fieldsets CREATE ACCOUNT-->

            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle"> </h3>
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="second_name" placeholder="Last Name">
                <input type="text" name="address" placeholder="Address line1">
                <input type="text" name="address2" placeholder="Address line2 (optional)">
                <input type="text" name="phone" placeholder="Phone">
                <input type="text" name="eircode" placeholder="eircode">
                <div class="DOB">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">

                </div>
                <!--DOB-->

                <textarea name="info" placeholder="info"></textarea>
                <div>
                    <input type="button" name="previous" class="previous action-button" value="Previous">
                </div>
                <div>
                    <input type="button" name="next" class="next action-button" value="Next">
                </div>
            </fieldset>
            <!--fieldsets PERSONAL DETAILS-->

            <fieldset>
                <div class="car">
                    <div>
                        <h2 class="fs-title">Car details Details</h2>
                        <h3 class="fs-subtitle">You can do this step later </h3>

                        <input type="text" name="vehicle_license" placeholder="Vehicle license ">
                        <input type="text" name="vehicle_year" placeholder="Year">
                        <input type="text" name="vehicle_color" placeholder="Color">
                        <input type="text" name="vehicle_model" placeholder="Model">

                    </div>

                    <!--ERRO: COMO SALVAR ESSE DADO? COMO ATRIBUIR UM ATRIBUTO-->
                    <header class="mb-3">Type of car:</header>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="car" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="car">car</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="motobike" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="motobike">Motobike</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="van" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="van">Small van</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="bus" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="bus">Small bus</label>
                        </div>
                    </div>
                    <!--./mb-3-->



                    <div class="row">
                        <div class="col-md-6">

                            <label for="vehicle_make">Make</label>
                            <select class="custom-select d-block w-100" id="manufacture" required>
                            <option value="">Choose...</option>
                            <option>Volkswagen</option>
                            <option>Toyota</option>
                            <option>Kia</option>
                            <option>Ford motors</option>
                            <option>General Motors</option>
                            <option>Honda</option>
                            <option>BMW</option>
                            <option>Nissan</option>
                            <option>Hyndai</option>
                            <option>Peugeot</option>
                            <option>Renault</option>
                            <option>Citroën</option>
                            <option>Mercedes</option>
                            <option>Audi</option>
                            <option>Suzuki</option>
                            <option>Mitsubishi</option>
                            <option>Ducati</option>
                            <option>Honda</option>
                            <option>Harley Davidson</option>
                            <option>Alfa Romeo</option>
                            <option>Ferrari</option>
                            <option>Lamborghini</option>
                            <option>Land Rover</option>
                            <option>Mini</option>
                            <option>Lexus</option>
                            <option>Rolls-Royce</option>
                            <option>SAAB</option>
                            <option>Yamaha</option>
                            <option>Dafra</option>
                            <option>Others...</option>
                        </select>
                        </div>
                        <!---./col-md-6"-->

                        <div class="col-md-6">
                            <label for="vehicle_type">Engine type</label>
                            <select class="custom-select d-block w-100" id="vehicle_type" required>
                            <option value="">Choose...</option>
                            <option>Petrol</option>
                            <option>Diesel</option>
                            <option>Eletric</option>
                            <option>Hybrid</option>
                        </select>
                        </div>
                        <!--col-md-6"--->

                    </div>
                    <!--row-->
                    <br>

                    <br>
                    <div class="adicional">
                        <textarea name="address" placeholder="Adicional information "></textarea>
                    </div>
                    <!--./adicional-->
                    <input type="button" name="previous" class="previous action-button" value="Previous">
                    <input type="submit" name="submit" class="submit action-button" value="Submit">
                    <!--ERROR: após submeter aparecer uma msg para logar-->
                    <button type="skip">Skip</button>
                </div>
            </fieldset>
            <!--Car details-->

        </form>

    </div>
    <!--registration-->


    <!--script-->
    <script>
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function() {
            return false;
        });
    </script>


</body>

</html>
