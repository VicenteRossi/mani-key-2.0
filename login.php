<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="validar.php" method="post">
		Rut: <input type="text" name="txtRut"><br />
		Clave: <input type="password" name="txtClave"><br />
		<input type="submit" name="enviar" value="Entrar"><br />
		<?php
			session_start();
			if(isset($_SESSION["mensaje"]))
			{
				echo $_SESSION["mensaje"];
				unset($_SESSION["mensaje"]);
			}
		?>
	</form>
</body>
</html>