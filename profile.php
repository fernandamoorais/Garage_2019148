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
    >
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--script-->

    <style>
        body {
            background-image: url("img/carrosel_1.jpg");
            overflow-x: hidden;
        }
    </style>
    <!--style-->
</head>

<body>
    <div class="btn_return">
        <button onclick="window.location.href='index.html';">
        Go back
      </button>
    </div>
    <div class="container_user_profile">
        <div class="leftbox">
            <nav class="profile">
                <a onclick="tabs(0)" class="tab active">
                    <i class="fa fa-user"></i>
                </a>
                <!--.0-->
                <a onclick="tabs(1)" class="tab">
                    <i class="fa fa-address-card"></i>
                </a>
                <!--.1-->
                <a onclick="tabs(2)" class="tab">
                    <i class="fa fa-car"></i>
                </a>
                <!--.2-->
                <a onclick="tabs(3)" class="tab">
                    <i class="fa fa-cog"></i>
                </a>
                <!--.3-->
                <a onclick="tabs(4)" class="tab">
                    <i class="fa fa-calendar"></i>
                </a>
                <!--ERROS: .4realizar booking-->
                <a onclick="tabs(5)" class="tab">
                    <i class="fa fa-calendar"></i>
                </a><!--ERRO VERIFICAR LAST RECEIPT-->
                <!--.5-->
            </nav>
            <!--./profile-->
        </div>
        <!--./leftbox-->
        <div class="rightbox">
            <div class="profile tabShow">
                <h1>Personal information</h1>
                <h2>Username</h2><input type="text" class="input" name="user_name">
                <h2>First name</h2> <input type="text" class="input" name="first_name">
                <h2>Surname</h2> <input type="text" class="input" name="last_name">

                <h2>Phone Number</h2> <input type="text" class="input" name="phone">
                <div class="input">
                    <h2 for="birthday">Birthday:</h2>
                    <input type="date" id="birthday" name="birthday">
                </div>

                <button class="bnt_update">Update</button>
                <!--./input DOB-->
            </div>
            <!--profile tabShow-->

            <div class="address tabShow">
                <h1>Address information</h1>
                <h2>Address</h2>
                <input type="text" class="input" name="address">
                <h2>Adress (optional)</h2>
                <input type="text" class="input" name="address2">
                <h2>Eircode</h2> <input type="text" class="input" name="eircode">
                <h2>Adicional information</h2> <textarea class="input" name="info" placeholder="Adicional information"></textarea>
                <div> <button class="bnt_update">Update</button></div>

            </div>
            <!--./adress tabShow-->

            <div class="car tabShow">
                <h1>Cars Setting</h1>
                <h2>Vehicle license</h2> <input type="text" class="input" name="vehicle_license">
                <h2>Vehicle year</h2> <input type="text" class="input" name="vehicle_year">
                <h2>Vehicle color</h2> <input type="text" class="input" name="vehicle_color">
                <h2>Vehicle Model</h2><input type="text" class="input" name="vehicle_model">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Type of car:</h2>
                        <div class="car_type">
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
                    </div>
                    <!--.colmd-3-->
                    <div class="col-md-3">
                        <div>
                            <h2>choose ypur make</h2>
                            <label for="vehicle_make"></label>
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

                        <div>
                            <h2>Engine type</h2>
                            <label for="vehicle_type"></label>
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
                </div>
                <!--./row-->

                <h2>Adcional information about the vehicle</h2>
                <div class="adicional">
                    <textarea name="address" placeholder="Adicional information " style="width: 78%;"></textarea>
                </div>

                <!--./adicional-->
                <div> <button class="bnt_update">Update</button></div>

            </div>
            <!--./car tabshow-->

            <div class="account tabShow">
                <h1>Privacy Settings</h1>
                <h2>Email</h2><input type="text" class="input" name="email" placeholder="Email">
                <h2>Password</h2><input type="password" name="password" value="brightcode">
                <h2> Confirm Password</h2> <input type="password" name="password2" value="brightcode">
                <div>
                    <button class="bnt_update">Update</button>
                </div>

            </div>
            <!--./account tabShow-->
            <div class="booking tabShow">
                <h1>Address information</h1>
                <h2>Address</h2>
                <input type="text" class="input" name="address">
                <h2>Adress (optional)</h2>
                <input type="text" class="input" name="address2">
                <h2>Eircode</h2> <input type="text" class="input" name="eircode">
                <h2>Adicional information</h2> <textarea class="input" name="info" placeholder="Adicional information"></textarea>
                <div> <button class="bnt_update">Update</button></div>

            </div>
            <!--./ ERROR CREATE booking tabShow-->
            <div class="invoice tabShow">
                <h1>Address information</h1>
                <h2>Address</h2>
                <input type="text" class="input" name="address">
                <h2>Adress (optional)</h2>
                <input type="text" class="input" name="address2">
                <h2>Eircode</h2> <input type="text" class="input" name="eircode">
                <h2>Adicional information</h2> <textarea class="input" name="info" placeholder="Adicional information"></textarea>
                <div> <button class="bnt_update">Update</button></div>

            </div>
            <!--./ ERROR CREATE invoice tabShow-->


        </div>
        <!--./rightbox-->
    </div>
    <!--container_user_profile-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.jss"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script>
        const tabBtn =
            document.querySelectorAll(".tab");
        const tab =
            document.querySelectorAll(".tabShow");

        function tabs(panelIndex) {
            tab.forEach(function(node) {
                node.style.display = "none";
            });
            tab[panelIndex].style.display = "block";
        }
        tabs(0);
    </script>
    <script>
        $(".tab").click(function() {
            $(this).addClass("active").siblings().removeClass("active");

        })
    </script>

</body>

</html>