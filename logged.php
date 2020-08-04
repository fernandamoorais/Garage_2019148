<?php
include('server.php');
//the the user sucessfully login in he is foward tothis page. 

/*if (!isLoggedIn()) {
$_SESSION['msg'] = "You must log in first";
header('location: login.php');
}*/
//if some1 try to acess yhis index without logging it will foward the user to the login.php page
?>
<!DOCTYPE html>
<html>
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
    <link href="css/main.css" rel="stylesheet" type="text/css" /><!-- style-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <script type="text/javascript" src="main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>
    
</head>
<!--ERRO: não esta indo devagar-->
<!--ERRO: -->



<body>
    <!-- Navigation BAR -->
    <!--ERRO:centralizar menu-->
    <!--ERRO: fazer o slogan aparecer na nav bar/line 54 -->

    <nav class="navbar  navbar-expand-md navbar-dark bg-dark sticky-top">
        <!--md because its the breakpoint where it gonna change from the mobile to expanded nav-->
        <div class="container-fluid">
            <!-- <a class="navbar-brand" ><img scr="img/sample.jpg"></a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
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
                    <li class="navbar-nav">
                        <a class="nav-link" href='booking.php'>Make an appoiment</a>
                    </li>
                </ul>
                

            </div>
        </div>
    </nav>

    <section class="wrapper post bg-img">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>You are logged</h2>
                    <p>Now you can book your service.</p>
                </header>
                <div class="content">

                    <!-- notification message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success">
                            <h3>
                                <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
                    <!-- logged in user information -->
                    <div class="profile_info">

                        <div>
                            <?php if (isset($_SESSION['user'])) : ?>
                                <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                <small>
                                    <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                                    <br>
                                    <a href="index.php?logout='1'" style="color: red;">logout</a>
                                </small>

                            <?php endif ?>
                        </div>
                    </div>

                </div>
            </article>
        </div>
        
    </section>


</body>

</html>