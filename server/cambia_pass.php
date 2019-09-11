<?php

	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

	if(empty($_GET['user_id'])){
		header('Location: ../index.php');
	}

	if(empty($_GET['token'])){
		header('Location: ../index.php');
	}

	$user_id = $mysqli->real_escape_string($_GET['user_id']);
	$token = $mysqli->real_escape_string($_GET['token']);

	if(!verificaTokenPass($user_id, $token))
	{
echo 'No se pudo verificar los Datos';
exit;
	}


?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Cambiar contraseña</title>
<link rel="icon" href="ico.jpg" type="image/jpg">
<link rel="stylesheet" href= "../css/style.css">
<link rel="stylesheet" href="../vendor/bootstrap-4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/alertify/css/alertify.min.css">
<link rel="stylesheet" href="../vendor/alertify/css/themes/default.min.css">
<link rel="stylesheet" href="../css/master.css">

<script src="../vendor/jquery-3.3.1/jquery-3.3.1.min.js"></script>
<script src="../vendor/bootstrap-4.1/js/bootstrap.min.js"></script>
<script src="../vendor/alertify/alertify.min.js"></script>

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
		<div class="container"><center>
		<div id="loginbox" class="login-form col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="panel panel-info" >

			<div class="panel-heading">
				<div id="tituloCambio" class="panel-title"><h3>Cambiar contraseña</h3></div>
				<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="../index.php">Iniciar Sesi&oacute;n</a></div>
			</div>

			<div style="padding-top:30px" class="panel-body" >

				<form id="loginform" class="form-horizontal" role="form" action="guarda_pass.php" method="POST" autocomplete="off">

					<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />

					<input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />

					<div class="form-group">
						<label class="etiquetasVarias" for="password" class="col-md-6 control-label">Nueva contraseña</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password" placeholder="Contraseña" required>
						</div>
					</div>

					<div class="form-group">
						<label class="etiquetasVarias" for="con_password" class="col-md-6 control-label">Confirmar contraseña</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="con_password" placeholder="Confirmar contraseña" required>
						</div>
					</div>

					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
							<button id="btn-login" type="submit" class="btn btn-success">Modificar</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
		</center>
		</div>
		<div id="prueba3">

		</div>
		<footer class="text-center">
						<a class="up-arrow" href="#Inicio" data-toggle="tooltip" title="TO TOP">
							<span class="glyphicon glyphicon-chevron-up"></span>
						</a>
										<a href="http://www.mep.go.cr/educatico" target="_blank"> Ministerio de Educación Pública de Costa Rica / Departamento de GESPRO </a> <br>
		</footer>
	</body>
</html>
