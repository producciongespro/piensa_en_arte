<?php

	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

	$user_id = $mysqli->real_escape_string($_POST['user_id']);
	$token = $mysqli->real_escape_string($_POST['token']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);

	if(validaPassword($password, $con_password))
	{

		$pass_hash = hashPassword($password);

		if(cambiaPassword($pass_hash, $user_id, $token))
		{
			echo "<head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><meta http-equiv='X-UA-Compatible' content='ie=edge'><title>Cambiar contraseña</title><link rel='icon' href='ico.jpg' type='image/jpg'><link rel='stylesheet' href= '../css/style.css'><link rel='stylesheet' href='../vendor/bootstrap-4.1/css/bootstrap.min.css'><link rel='stylesheet' href='../vendor/alertify/css/alertify.min.css'><link rel='stylesheet' href='../vendor/alertify/css/themes/default.min.css'><link rel='stylesheet' href='../css/master.css'><script src='../vendor/jquery-3.3.1/jquery-3.3.1.min.js'></script><script src='../vendor/bootstrap-4.1/js/bootstrap.min.js'></script><script src='../vendor/alertify/alertify.min.js'></script></head>";
			echo "<style>body {background-color: white;}</style>";
			echo "<nav class='navbar navbar-default navbar-fixed-top'><div class='container-fluid'> <div class='navbar-header'><img id='logo' class='' src='../img/logo.png'></div><div id='nombreSitio' class=''><span >Piensa en Arte</span><img src='../img/icono-informacion.png' style='visibility: hidden;' class='btn-lg' id='info' data-toggle='modal' data-target='#myModal'></div></div></div></nav>";
			echo "<center><br><br><h1 style='padding-left:20px;   margin-left: auto; margin-right: auto;'>Contrase&ntilde;a Modificada </h1> <a href='../index.php' ><h2>Iniciar Sesion</h2></a></center>";
			} else {
				echo "<style>body {background-color: white;}</style>";
				echo "<div style='heigth:100%; width: 100%; background-color: #e9ecef;'><img style='max-width: 100%;width: 141px; padding-top: 30px; padding-bottom: 30px;padding-left: 10px' src='../../assets/img/logo.png' alt='Logo sistema' class='img-fluid'></div>";
			echo "<center><br><br><h1 style='padding-left:20px;   margin-left: auto; margin-right: auto;'>Error al modificar contraseña </h1></center>";

		}
	} else {
		echo "<head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><meta http-equiv='X-UA-Compatible' content='ie=edge'><title>Cambiar contraseña</title><link rel='icon' href='ico.jpg' type='image/jpg'><link rel='stylesheet' href= '../css/style.css'><link rel='stylesheet' href='../vendor/bootstrap-4.1/css/bootstrap.min.css'><link rel='stylesheet' href='../vendor/alertify/css/alertify.min.css'><link rel='stylesheet' href='../vendor/alertify/css/themes/default.min.css'><link rel='stylesheet' href='../css/master.css'><script src='../vendor/jquery-3.3.1/jquery-3.3.1.min.js'></script><script src='../vendor/bootstrap-4.1/js/bootstrap.min.js'></script><script src='../vendor/alertify/alertify.min.js'></script></head>";
		echo "<style>body {background-color: white;}</style>";
		echo "<nav class='navbar navbar-default navbar-fixed-top'><div class='container-fluid'> <div class='navbar-header'><img id='logo' class='' src='../img/logo.png'></div><div id='nombreSitio' class=''><span >Piensa en Arte</span><img src='../img/icono-informacion.png' style='visibility: hidden;' class='btn-lg' id='info' data-toggle='modal' data-target='#myModal'></div></div></div></nav>";
		echo "<center><br><br><h1 style='padding-left:20px;   margin-left: auto; margin-right: auto;'>Las contraseñas no coinciden</h1></center>";

	}

?>
