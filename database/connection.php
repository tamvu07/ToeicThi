<?php
require_once "config.php";
class connection {
	private $db = '';
	private $sql = '';
	function __construct(){
	   $this->db = new mysqli(sql_server, sql_user, sql_password, sql_database);
	   $this->db->set_charset("utf8"); 
	} 
	//các method
	
	function set_query($sql)
	{
		$this->sql = $sql;
	}
} //class goc
?>