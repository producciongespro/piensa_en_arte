<?php

	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

	if(isset($_GET["id"]) AND isset($_GET['val']))
	{

		$idUsuario = $_GET['id'];
		$token = $_GET['val'];

		$mensaje = validaIdToken($idUsuario, $token);
	}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuarios</title>
    <link rel="icon" href="ico.jpg" type="image/jpg">
    <link rel="stylesheet" href= "../css/style.css">
    <link rel="stylesheet" href="../vendor/bootstrap-4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/alertify/css/alertify.min.css">
    <link rel="stylesheet" href="../vendor/alertify/css/themes/default.min.css">
    <link rel="stylesheet" href="../css/master.css">

    <script src="../../vendor/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/js/bootstrap.min.js"></script>
    <script src="../../vendor/alertify/alertify.min.js"></script>

    <script src="js/model/model.js"></script>
    <script src="js/views/v_sign_up.js"></script>
    <script src="js/controller/c_sign_up.js"></script>
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
      <div class="navbar-header">
        <img id="logo" class="" src="../img/logo.png">

      </div>
      <div id="nombreSitio" class="">
        <span >Piensa en Arte</span>
              <img src="../img/icono-informacion.png" style="visibility: hidden;" class="btn-lg" id="info" data-toggle="modal" data-target="#myModal">

        </div>
      </div>
    </div>
  </nav>
<br>
		<div class="container">
			<div class="jumbotron">

				<h1><?php echo $mensaje; ?></h1>

				<br />
				<p>Ya su cuenta está activa. Puede acceder al sitio <b>Piensa en arte</b> e ingresar sus credenciales:</p>
				<p>
				    <a href="../index.php" ><h2> .: IR AL SITIO :. </h2></a>
				</p>
			</div>
		</div>
	</body>
</html>
