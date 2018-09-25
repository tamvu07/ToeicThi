<?php
require_once("../database/connection.php");

class model_admin extends connection {
	function get_list_users() {
		$sql = "SELECT * FROM nguoidung";
		return $sql;
	}
}

?>