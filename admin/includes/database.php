<?php 

require_once ("config.php");
class Database{

	public $connection;//inorder to available $connection variable everywhere we create this variable

	function __construct(){
		$this->open_db_connection();
	}

	public function open_db_connection(){
		//$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // le @ permet d'éviter le message d'erreur généré par php afin de le gérer nous même.
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if($this->connection->connect_errno)
		{
			die ("Un problème est survenu lors de la tentative de connexion à la BDD: ".$this->connection->connect_error);
		}
	}

	public function query($sql){
		$result = $this->connection->query($sql);
		//verification of query
		if(!$result){
			die("Query Failed");
		}
		return $result;
	}

	private function confirm_query($result){
		if(!$result){
			die("query failed" . $this->connection->error);
		}
	}

	public function escape_string($string){
		$escaped_string = $this->connection->real_escape_string($string);
		return $escaped_string;
	}

	public function the_insert_id(){
		return $this->connection->insert_id;
	}

}


$database = new Database();


 ?>