<?php
require_once "config.php";
class connection {
	protected $db;
	function __construct(){
	   $this->db = new mysqli (sql_server, sql_user, sql_password, sql_database);
	   $this->db->set_charset("utf8"); 
	} 
	//các method
	
} //class goc
?>