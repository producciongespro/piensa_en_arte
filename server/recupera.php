<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';

	session_start();

	if(isset($_SESSION["id_usuario"])){
		header("Location: ../../index.html");
	}

	$errors = array();

	if(!empty($_POST))
	{
		$email = $mysqli->real_escape_string($_POST['email']);

		if(!isEmail($email))
		{
			$errors[] = "Debe ingresar un correo electronico valido";
		}

		if(emailExiste($email))
		{
			$user_id = getValor('id', 'correo', $email);
			$nombre = getValor('nombre', 'correo', $email);

			$token = generaTokenPass($user_id);

			$url = 'http://'.$_SERVER["SERVER_NAME"].'/piensa_en_arte/server/cambia_pass.php?user_id='.$user_id.'&token='.$token;

			$asunto = 'Recuperar contraseña - Sistema de Usuarios';
			$cuerpo = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>$url</a>";

			if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
				echo "<head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><meta http-equiv='X-UA-Compatible' content='ie=edge'><title>Cambiar contraseña</title><link rel='icon' href='ico.jpg' type='image/jpg'><link rel='stylesheet' href= '../css/style.css'><link rel='stylesheet' href='../vendor/bootstrap-4.1/css/bootstrap.min.css'><link rel='stylesheet' href='../vendor/alertify/css/alertify.min.css'><link rel='stylesheet' href='../vendor/alertify/css/themes/default.min.css'><link rel='stylesheet' href='../css/master.css'><script src='../vendor/jquery-3.3.1/jquery-3.3.1.min.js'></script><script src='../vendor/bootstrap-4.1/js/bootstrap.min.js'></script><script src='../vendor/alertify/alertify.min.js'></script></head>";
				echo "<style>body {background-color: white;}</style>";
				echo "<nav class='navbar navbar-default navbar-fixed-top'><div class='container-fluid'> <div class='navbar-header'><img id='logo' class='' src='../img/logo.png'></div><div id='nombreSitio' class=''><span >Piensa en Arte</span><img src='../img/icono-informacion.png' style='visibility: hidden;' class='btn-lg' id='info' data-toggle='modal' data-target='#myModal'></div></div></div></nav>";
				echo "<br><br><p style='padding-left:20px'>$nombre, hemos enviado un correo electronico a la direccion $email para restablecer tu contraseña </p>";
				echo "<a style='padding-left:20px' href='../index.php' >Iniciar Sesion</a>";
				exit;
			}
			} else {
			$errors[] = "La direccion de correo electronico no existe";
		}
	}
?>


<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Recuperar contraseña</title>
<link rel="icon" href="ico.jpg" type="image/jpg">
<link rel="stylesheet" href= "../css/style.css">
<link rel="stylesheet" href="../vendor/bootstrap-4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/alertify/css/alertify.min.css">
<link rel="stylesheet" href="../vendor/alertify/css/themes/default.min.css">
<link rel="stylesheet" href="../css/master.css">

<script src="../vendor/jquery-3.3.1/jquery-3.3.1.min.js"></script>
<script src="../vendor/bootstrap-4.1/js/bootstrap.min.js"></script>
<script src="../vendor/alertify/alertify.min.js"></script>
		<style>
				body {
                   /* background-image: url("img/paris3.jpg"); */
                   background-repeat: no-repeat;
                }
								#loginbox{
									background-color: #2d2d2c;
									border-radius: 12px;
									padding: 35px;
									padding-bottom: 12px;
									margin-top: 89px;
								}
								.jumbotron{
									    padding: 2rem 2rem;
								}
        </style>
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
		<div class="container">
			<div class="row">
				<div class="col-md-3">
									
				</div>
				<div class="col-md-6">

				

				<div id="loginbox" class="mainbox col-md-12">

		
					<div class="panel panel-primary class" >
				
				<div class="panel-heading">
							<div style="color:#f39200;" class="panel-title"><h4>Recuperar Contraseña</h4></div>
							
						</div>
			


						<div style="padding-top:30px" class="panel-body" >

							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

							<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">

								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="email" type="email" class="form-control" name="email" placeholder="correo electrónico" required>
								</div>

								<div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls text-right">
										<button id="btn-login" type="submit" class="btn btn-info">Enviar</a>
									</div>
									<div id="mensaje">

									</div>
								</div>

							
				<div class="form-group">
											<div class="col-6 control">
													<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >														
													</div>
												</div>
				</div >

												
											<div class="col-12 text-center">
														<a href="../" title="Ir a inicio" >
																<img src="../img/home.png" alt="inicio">
														</a>
												</div>
	

							</form>
						</div>
					</div>
				</div>
			</div>
				<div class="col-md-3">

				</div>
			</div>

		</div>
		<div id="prueba2">

		</div>
		<footer class="text-center">
						<a class="up-arrow" href="#Inicio" data-toggle="tooltip" title="TO TOP">
							<span class="glyphicon glyphicon-chevron-up"></span>
						</a>
										<a href="http://www.mep.go.cr/educatico" target="_blank"> Ministerio de Educación Pública de Costa Rica / Departamento de GESPRO </a> <br>
		</footer>
	</body>
</html>
