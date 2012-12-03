<?php

class DB
{
        private $server = "localhost";
        private $user = "root";
        private $password = "admin";
        private $database = "aerolinea";
        private $conn;
        
	public static function Instance()
	{
		static $inst = null;
		if ($inst == null)
			$inst = new DB();
		return $inst;
	}

	private function __construct()
	{
           $this->conn =  new PDO("mysql:host=$this->server;dbname=$this->database", $this->user, $this->password, array( PDO::ATTR_PERSISTENT => true ) );
           $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
           
	}
        
        public function queryArray($sql){            
            $temp = $this->conn->query($sql);
            return $temp->fetchAll();
        }
        
        public function query($sql){            
            return $this->conn->query($sql);
        }
        
        
        public function exec($sql){            
            return $this->conn->exec($sql);
        }
        
}

?>
