<?php
require_once "config.php";
class connection {
	
	private $result = null;
	private $con = null;
	
	public function connect(){
	   $this->con = new mysqli(sql_server, sql_user, sql_password, sql_database);
	   $this->con->set_charset("utf8"); 
	} 
	
	public function select($sql)
	{
		$this->connect();
		$this->result = $this->con->query($sql);
	}
	
	public function load_rows() {
		if($this->result->num_rows > 0)
		{
			$row = $this->result->fetch_assoc();
		}
		else
		{
			$row = 0;
		}
		return $row;
	}
	
	public function execute_no_return($sql) {
		$this->connect();
		$this->con->query($sql);
	}

}
?>