<?php include('server.php') ?>
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
    <link href="fontawesome/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- style-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.jss"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--script-->

    <script>
        /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
                                                        ---------------------------------------
                                                        */

        function cambiar_login() {
            document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
            document.querySelector('.cont_form_login').style.display = "block";
            document.querySelector('.cont_form_sign_up').style.opacity = "0";

            setTimeout(function() {
                document.querySelector('.cont_form_login').style.opacity = "1";
            }, 400);

            setTimeout(function() {
                document.querySelector('.cont_form_sign_up').style.display = "none";
            }, 200);
        }

        function cambiar_sign_up(at) {
            document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
            document.querySelector('.cont_form_sign_up').style.display = "block";
            document.querySelector('.cont_form_login').style.opacity = "0";

            setTimeout(function() {
                document.querySelector('.cont_form_sign_up').style.opacity = "1";
            }, 100);

            setTimeout(function() {
                document.querySelector('.cont_form_login').style.display = "none";
            }, 400);


        }



        function ocultar_login_sign_up() {

            document.querySelector('.cont_forms').className = "cont_forms";
            document.querySelector('.cont_form_sign_up').style.opacity = "0";
            document.querySelector('.cont_form_login').style.opacity = "0";

            setTimeout(function() {
                document.querySelector('.cont_form_sign_up').style.display = "none";
                document.querySelector('.cont_form_login').style.display = "none";
            }, 500);

        }
    </script>
    <style>
        .body {
            margin: 0px auto;
            padding: 0px;
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
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
                    <li class="nav-item ">
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

                    <!--BEFPRE LOGIN-->
                    <li class="navbar-nav">
                        <a class="nav-link" href='login.html'>Book our services</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>


    <div class="cotn_principal">
        <div class="cont_centrar">

            <div class="cont_login">
                <div class="cont_info_log_sign_up">
                    <div class="col_md_login">
                        <div class="cont_ba_opcitiy">

                            <h2>LOGIN</h2>
                            <p></p>
                            <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                        </div>
                    </div>
                    <div class="col_md_sign_up">
                        <div class="cont_ba_opcitiy">
                            <h2>SIGN UP</h2>


                            <p></p>

                            <button class="btn_sign_up" onclick="window.location.href='registration.html';">BECAME A MEMBER</button>
                        </div>
                    </div>
                </div>


                <div class="cont_back_info">
                    <div class="cont_img_back_grey">
                        <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
                    </div>

                </div>
                <div class="cont_forms">
                    <div class="cont_img_back_">
                        <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
                    </div>
                    <div class="cont_form_login">
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="fas fa-times-circle"></i></a>
                        <h2>LOGIN</h2>
                        <input type="text" placeholder="Username" />
                        <input type="password" placeholder="Password" />
                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>

                    <div class="cont_form_sign_up">
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
                        <h2>SIGN UP</h2>
                        <input type="text" placeholder="Username" />
                        <input type="password" placeholder="Password" />
                        <input type="password" placeholder="Confirm Password" />
                        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>

                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>