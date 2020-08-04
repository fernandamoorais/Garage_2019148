<?php include('server.php')
// on this page user has option of login or became a member?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--characther set -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--setting scale for mabile devices-->
  <title>Ger's Garage</title>


  <link href="css/login.css" rel="stylesheet" type="text/css"><!-- style-->
  <!--for navbar-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <!--for loging page-->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
            <a class="nav-link" href="index.html">Home </a>
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

  <!---------------------REF: https://bootsnipp.com/snippets/7oXOx---------------->
  <div class="cotn_principal">
    <div class="cont_centrar">
            <div class="cont_login">
        <div class="cont_info_log_sign_up">
          <!--before the click-->
          <div class="col_md_login">
            <div class="cont_ba_opcitiy">
              <h2>LOGIN</h2>
              <p></p>
              <button class="btn_login" onclick="cambiar_login()">Login</button>
            </div>
          </div>

          <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h2>SIGN UP</h2>
              <p></p>
              <button class="btn_sign_up" onclick="window.location.href='registration.php';">Became a member</button>
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

          <!--This is after click-->
          <div class="cont_form_login">
            <a href="#" onclick="ocultar_login_sign_up()"><i class="fas fa-times-circle"></i></a>


              <h2>LOGIN </h2>
              <?php include('server.php')?>
              <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="input-group"><label>Username</label><input type="text" name="Username"></div>
                <div class="input-group"><label>Password</label><input type="Password" name="Password"></div>
                <div class="input-group">
                <button type="submit" class="btn_login" name="login_btn">Login</button>
                <!--<button class="btn_sign_up" onclick="window.location.href='dashboard.php';">Login</button>-->
                </div>
              </form>

              <!--ERROR: WHY I CANT delete this pieace of code even tough is the sign in section ?-->
              <div class="cont_form_sign_up">
                <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
                <h2>SIGN UP</h2>
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <input type="password" placeholder="Confirm Password" />
                <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>-->

              </div>

          </div>

        </div>
      </div>
    </div>
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


</body>

</html>
<!--

session_start();
include('server.php');

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check to see if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $pass = $_POST['password'];

  // create SQL statement
  $sql = "SELECT id, user FROM users WHERE user='" . $username . "' and pass='" . $pass . "' ";

  // Query database
  $result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($result);

  // count the number of records found
  $count = mysqli_num_rows($result);

  // if result matches $username and $password, table row must be 1 row
  if ($count > 0) {

    // Set our session variable
    $_SESSION['login_user'] = $row['user'];
    $_SESSION['id_user'] = $row['id'];

    if (!empty($_REQUEST['url'])) {
      switch ($_REQUEST['url']) {
        case 1:
          $redirect = "skills.php";
          break;
        case 2:
          $redirect = "softwares.php";
          break;
        case 3:
          $redirect = "education.php";
          break;
        case 4:
          $redirect = "employees.php";
          break;
        default:
          $redirect = "index.php";
      }
    } else {
      $redirect = "index.php";
    }
    header('Location: ' . $redirect);
  } else {
    $error = "Your Login Name or Password is invalid";
  }
  // 5. Close database connection
  mysqli_close($connection);
}
-->