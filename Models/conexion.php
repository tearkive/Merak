<?php 	
	Class DB{
		private $host;
		private $dbname;
		private $username;
		private $password;

		public function __construct(){
			$this->host = 'localhost';
			$this->dbname = 'Merak';
			$this->username = 'root';
			$this->password = 'root';
		}
		
		public function conectar(){
			$conn = mysqli_connect($this->host,$this->username, $this->password,$this->dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
				return null;
			}else{
				//echo "Connected successfully";
				return $conn;
			}
			//mysqli_close($conn);
		}
	}	
?>