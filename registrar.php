<?php
	include_once('usuario.php');
	$rut = $_POST["txtRut"];
	$nombre = $_POST["txtNombre"];
	$apellido = $_POST["txtApellido"];
	$clave = $_POST["txtClave"];
	$correo =$_POST["txtCorreo"];

	$user = new Usuario();
	$user->setRut($rut);
	$user->setNombre($nombre);
	$user->setApellido($apellido);
	$user->setClave($clave);
	$user->setCorreo($correo);

	if($user->creaUsuario())
		header("Location: index.html");
	else
		header("Location: registro.html");
?>
