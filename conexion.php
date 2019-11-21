<?PHP
	class Conexion
	{
		private static $instance;

		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "mydb";
		private $conexion;

		private function __construct()
		{

		}

		public static function getInstance()
		{
			if(!self::$instance instanceof self)
				self::$instance = new self;
			return self::$instance;
		}

		public function abreConexion()
		{
			try
			{
				$this->conexion = mysqli_init();
				$this->conexion->real_connect($this->host, $this->user, $this->pass, $this->db);
			}
			catch(Exception $e)
			{
				$this->conexion = null;
			}
		}

		public function usaConexion()
		{
			if($this->conexion != null)
				return $this->conexion;
			else
				return 0;
		}

		public function cierraConexion()
		{
			$this->conexion->close();
		}

	}
?>
