<?php include('server.php') ?>

<!-- For can create users --->
<!--ERROR: NÃO TA INICIALIZANDO post_code and phonenumber 
Erro : colocar en vermelho quando o dado está errado
ERRO: TITULO RESGISTRO ARRUMAR-->
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet" type="text/css"><!-- style-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>


</head>

<body>
    <nav class="navbar  navbar-expand-md navbar-dark bg-dark sticky-top">
        <!--md because its the breakpoint where it gonna change from the mobile to expanded nav-->
        <div class="container-fluid">
            <!-- <a class="navbar-brand" ><img scr="img/sample.jpg"></a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav md-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <!--ERROR: os links não estão funcionando . tenho que fazer outro tipo de href ?-->
                    <li class="nav-item">
                        <a class="nav-link" href="#one">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#'> News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#two'> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#three'> Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!--ERROR, its not saving into the data base-->
        <!--Error AFTER LOGING BOOKING TAB IS AVALIBLE -->
        

        <div>
            <h1>Registration</h1>
        </div>

        <form method="post" action="registration.php">
            <?php include('errors.php'); ?>
            <!--in case user doesn't enter the form values correctly-->

            <div class="input-group">
                <label for="username" class="col-sm-3 control-label">E-mail</label>
                <input type="text" placeholder="E-mail" name="username" value="<?php echo $username; ?>">
            </div>

            <br>

            <div class="input-group">
                <label for="first_name" class="col-sm-3 control-label">First name</label>
                <input type="text" placeholder="First name" name="first_name" value="<?php echo $first_name; ?>">
            </div>

            <br>

            <div class="input-group">
                <label for="last_name" class="col-sm-3 control-label">Last name</label>
                <input type="text" placeholder="Last name" name="last_name" value="<?php echo $last_name; ?>">
            </div>

            <br>

            <div class="input-group">
                <label for="last_name" class="col-sm-3 control-label">Adress</label>
                <input type="text" placeholder="Adress line 1" name="adress_line1" value="<?php echo $adress_line1; ?>">
                <input type="text" placeholder="Adress line 2" name="adress_line2" value="<?php echo $adress_line2; ?>">
            </div>

            <br>

            <div class="input-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <input type="text" placeholder="password" name="password" value="<?php echo $password; ?>">
            </div>

            <br>

            <div class="input-group">
                <label for="password2" class="col-sm-3 control-label">Password</label>
                <input type="text" placeholder="Confirm password" name="password2" value="<?php echo $password2; ?>">
            </div>

            <br>

            <div class="input-group">
                <label for="DOB" class="col-sm-3 control-label">Date of birthday</label>
                <input type="text" placeholder="DD/MM/YYYY" name="DOB" value="<?php echo $DOB; ?>">
            </div>

            <br>

            <div class="input-group">
                <label for="phone" class="col-sm-3 control-label">Phone number</label>
                <input type="phone" placeholder="Phone Number" name="phone" value="<?php echo $phoneNumber; ?>">
                <span class="help-block">Your phone number won't be disclosed anywhere </span>
            </div>

            <br>

            <div class="input-group">
                <label for="post_code" class="col-sm-3 control-label">Post Code</label>
                <input type="text" placeholder="Post code" name="post_code" value="<?php echo $post_code ?>">
            </div>
            <!--
                <div class="form-group">
                    <label for="Last_name" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Last_name" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>

               

                <div class="form-group">
                    <label for="Adress" class="col-sm-3 control-label">Adress line 1 </label>
                    <div class="col-sm-9">
                        <input type="text" id="Adress_line1" placeholder="Adress line 1" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Adress" class="col-sm-3 control-label">Adress line 2 </label>
                    <div class="col-sm-9">
                        <input type="text" id="Adress_line2" placeholder="Adress line 2 " class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password1" placeholder="Password" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password2" placeholder="Password" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="DOB" placeholder="DOB" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="PhoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="PhoneNumber" placeholder="PhoneNumber" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Post_code" class="col-sm-3 control-label">Post Code </label>
                    <div class="col-sm-9">
                        <input type="text" id="Post_code" placeholder="Post code" class="form-control">
                    </div>
                </div>-->

<!--ERRor alem de registrar quando clicar tem que recaminhar pra pagina index.php-->
            <button type="submit" class="btn btn btn-block" name='register_btn'>Register</button>
        </form>
    </div>
</body>