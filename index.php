<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>AGRIICOLA</title>

  <!-- Estilos y fuentes del template  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/animate.css">
</head>

<body>
  <style>
    body {
      background: url("img/Agricultura.jpg") no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
  <!-- Navegación -->
  <section id="login" class="animated fadeIn animation1">
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container">

        <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menú
          <i class="fa fa-bars"></i>
        </button>
      </div>
    </nav>

    <div class="container align-self-center mt">

      <div class="container px-lg-5">
        <div class="row mx-lg-n5">
          <div class="col py-3 px-lg-5 align-self-center col-12 col-sm-12 col-md-4 col-lg-6">
            <img src="img/agriicola_logo_alternativo.png" width="580" class="img-fluid">
          </div>
          <div class="col py-3 px-lg-5 col-sm-12 col-md-8 col-lg-6">
            <div class="card p-3">
              <div class="card-body">
                <h1 class="text-center">Iniciar sesión</h1>
                <form class="p-4" method="POST" action="">
                  <div class="form-group">
                    <label for="emaill">Correo electrónico</label>
                    <input type="email" class="form-control" id="emaill" name="email" aria-describedby="emailHelp" placeholder="usuario@arpan.com.mx">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="**************">
                  </div>
                  <p class="text-center">
                    <span>¿Has olvidado tu contraseña? </span><a href="pass_recovery.php" class="text-success">Recupérala aquí</a>
                  </p>
                  <div class="col-12 col-sm-12 col-6 col-md-12 text-center mt-4">
                    <button type="submit" name="userLogin" class="btn btn-success text-uppercase">Iniciar sesión</button>
                  </div>
                  <div class="text-center mt-3">
                    <a class="text-info" href="#!" id="create_account">Crear una cuenta</a>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

  </section>

  <section id="register" class="animated fadeIn animation1">
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menú
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">INICIAR SESIÓN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Contenido -->
    <div class="container col-12 col-sm-12 col-md-10 col-lg-10">
      <div class="row">
        <div class="col-2 col-md-4"></div>
        <div class="col-8 col-md-4 col-lg-4 col-sm-8">
          <img src="img/agriicola_logo_alternativo.png" class="img-fluid">
        </div>
        <div class="col-2 col-md-4"></div>
      </div>

      <!-- Formulario -->
      <div class="card col-12 col-sm-12 mt-4">
        <div class="card-body">
          <h1 class="text-center">Registrarse</h1>
          <form method="POST" action="" class="m-2">
            <div class="row ">
              <div class="col-12 col-sm-12 col-md-6">
                <label for="name">Nombre(s):</label>
                <input type="text" class="form-control" placeholder="Abraham" id="name" name="userName" required>
              </div>
              <div class="col-12 col-sm-12 col-md-6">
                <label for="last_name">Apellido(s):</label>
                <input type="text" class="form-control" placeholder="Ayala Padilla" id="last_name" name="userLastName" required>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 col-sm-12 col-md-6">
                <label for="phone">Teléfono:</label>
                <input type="tel" class="form-control" placeholder="5545171865" id="phone" name="phoneNumber" required>
              </div>
              <div class="col-12 col-sm-12 col-md-6">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" placeholder="ejemplo@arpan.com.mx" id="email" name=userEmail required>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 col-sm-12 col-md-6">
                <label for="company_name">Nombre de la empresa:</label>
                <input type="text" class="form-control" placeholder="ARPAN" id="company_name" name="userCompany" required>
              </div>

              <div class="col-12 col-sm-12 col-md-6">
                <label for="pass">Contraseña:</label>
                <input type="password" class="form-control" placeholder="**********" id="pass" name="userPass1" required>
              </div>

              <div class="col-12 col-sm-12 col-md-6">
                <label for="repeat_pass">Confirmar contraseña:</label>
                <input type="password" class="form-control" placeholder="**********" id="repeat_pass" name="userPass2" required>
              </div>
            </div>
            <div class="row ">
              <div class="col-1 col-sm-1 col-md-3"></div>
              <div class="col-12 col-sm-10 col-6 col-md-6 mt-4">
                <button type="submit" name="registerUser" class="btn btn-success btn-lg btn-block">Registrarme</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Bootstrap y Javascripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>


<?php
include('config/functions.php');
$data = new Functions();

if(isset($_POST['userLogin'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $data->userLogin($email, $pass);
}else if (isset($_POST['registerUser'])) {
  $userName = $_POST['userName'];
  $userlastName = $_POST['userLastName'];
  $phoneNumber = $_POST['phoneNumber'];
  $userEmail = $_POST['userEmail'];

  $userCompany = $_POST['userCompany'];
  $userPass1 = $_POST['userPass1'];
  $userPass2 = $_POST['userPass2'];

  $data->registerUser($userName, $userlastName, $phoneNumber, $userEmail, $userCompany,
    $userPass1, $userPass2);

  }

  ob_end_flush();
?>