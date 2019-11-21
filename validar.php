<?php
	include_once('usuario.php');
	session_start();
	$rut = $_POST["txtRut"];
	$clave = $_POST["txtClave"];
	$user = new Usuario();
	$user->setRut($rut);

	$user2 = $user->buscaUsuario();
	if($user2 != null)
	{
		/*echo "rut: ".$rut."<br />";
		echo "clave: ".$clave."<br />";
		echo "rut clase: ".$user2->getRut()."<br />";
		echo "clave clase: ".$user2->getClave()."<br />";*/
		if(strcmp($rut, $user2->getRut()) === 0 && strcmp($clave, $user2->getClave()) === 0)
		{
			$_SESSION["user"] = $user2;
			header("Location: home.php");
		}
		else
		{
			$_SESSION["mensaje"] = "Usuario o clave incorrectos";
			header("Location: login.php");
		}
	}
	else
	{
		$_SESSION["mensaje"] = "Usuario o clave incorrectos";
		header("Location: login.php");
	}
?>
