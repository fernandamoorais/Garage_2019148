<?php
include('conn.php');
	$error = array();

if(!empty($_POST)){
	

	
	if(!empty($_POST['user'])){
		$user = $_POST['user'];
	}else{
		$error[] = "User error";
	}
	
	if(!empty($_POST['pass'])){
		$pass = $_POST['pass'];
	}else{
		$error[] = "pass error";
	}

	if(count($error) == 0){
		$sql = "SELECT pass, login, isAdm, id_login, id_user FROM login WHERE login = '".$user."' LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

		if($count>0){
			
			$login = mysqli_fetch_assoc($result);
			if($login['pass'] == md5($pass)){
				echo "asdasd";
				if($login['isAdm'] != 1){
					$_SESSION['id_login'] = $login['id_login'];
					$_SESSION['id_user'] = $login['id_user'];
					$_SESSION['login'] = $login['login'];
					header("Location: vehicle.php");
				}else{
					$_SESSION['isAdm'] = 1;
					$_SESSION['id_login'] = $login['id_login'];
					$_SESSION['id_user'] = $login['id_user'];
					$_SESSION['login'] = $login['login'];
					header("Location: admin/dashboard.php");
				}
			}else{
				$error[] = "wrong pass";
			}
			
		}else{
			$error[] = "wrong login";
		}
	}
}

if(isset($_REQUEST['msg'])){
	$error[] = $_REQUEST['msg'];
}



?>
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='contact.php'> Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='booking.php'>Book our services</a>
                    </li>
 
                    <li class=" nav-item">
                        <a class="nav-link active" href='login.php'>Member area</a>
                    </li>
                </ul>

            </div>
            <!--collapse navbar-collapse justify-content-sm-center-->
        </div>
        <!--container-fluid-->
    </nav>
    <!--NavBar-->


    <div class="cotn_principal">
        <div class="cont_centrar">
		
<?php if(count($error)>0){
	
	$errorMsg = implode("<br>",$error);
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong><br> <?php echo $errorMsg;?>
</div>

<?php } ?>
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

                            <button class="btn_sign_up" onclick="window.location.href='registration.php';">BECOME A MEMBER</button>
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
						<form action="login.php" method="post">
							<input type="text" placeholder="Username" name="user" />
							<input type="password" placeholder="Password" name="pass" />
							<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
						</form>
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