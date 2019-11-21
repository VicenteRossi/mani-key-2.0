<?php
	include_once('conexion.php');
	class Usuario
	{
		private $rut;
		private $nombre;
		private $apellido;
		private $correo;
		private $clave;
		private $conexion;

		public function __construct()
		{

		}

		public function creaUsuario()
		{
			$this->conexion = Conexion::getInstance();
			$this->conexion->abreConexion();
			$var = $this->conexion->usaConexion();
			$query = "INSERT INTO usuario(rut, nombre, apellido,clave,correo)
			values('".
			$this->rut."','".
			$this->nombre."','".
			$this->apellido."','".
			$this->clave."','".
			$this->correo."')";

			if($var->query($query))
			{
				$this->conexion->cierraConexion();
				return true;
			}
			else
			{
				$this->conexion->cierraConexion();
				return false;
			}
		}

		public function buscaUsuario()
		{
			$this->conexion = Conexion::getInstance();
			$this->conexion->abreConexion();
			$var = $this->conexion->usaConexion();
			$query = "SELECT * FROM usuario WHERE rut='".$this->rut."'";
			$resultado = $var->query($query);
			if(mysqli_num_rows($resultado) > 0)
			{
				$usuario = new Usuario();
				while($fila = $resultado->fetch_array())
				{
					$usuario->setRut($fila[0]);
					$usuario->setNombre($fila[1]);
					$usuario->setApellido($fila[2]);
					$usuario->setClave($fila[3]);
					$usuario->setCorreo($fila[4]);
				}
				$this->conexion->cierraConexion();
				return $usuario;
			}
			else
			{
				$this->conexion->cierraConexion();
				return false;
			}
		}

		public function setRut($rut)
		{
			$this->rut = $rut;
		}

		public function getRut()
		{
			return $this->rut;
		}

		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function setApellido($apellido)
		{
			$this->apellido = $apellido;
		}

		public function getApellido()
		{
			return $this->apellido;
		}

		public function setClave($clave)
		{
			$this->clave = $clave;
		}

		public function getClave()
		{
			return $this->clave;
		}
		public function setCorreo($correo)
		{
			$this-> correo=$correo;
		}
		public function getCorreo()
		{
			return $this->correo;
		}
	}
?>
