<?php

include "constants.php";

Class Database
{
	public $db;
	
	public function __construct() {
		$this->connectDb() ;
	}

	public function connectDb()
	{
		$this->db  = new mysqli(HOST, USER, PASS, DBNAME);

		if ($this->db->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
		}

		if (!$this->db ) {
		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
	}

	public function execQuery($query)
	{

		$this->db  = new mysqli(HOST, USER, PASS, DBNAME);
		if ($this->db->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
		}
		$result = $this->db->query($query);

		if (!$result) {
		    throw new Exception("Database Error [{$this->db->errno}] {$this->db->error}");
		}
		else
		{
			return $result;
		}		
	}
}