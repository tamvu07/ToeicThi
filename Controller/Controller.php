<?php
require_once("../Model/Model.php");
class Controller extends Model {
	function listUser() {
		$list_user = new Model();
		return $list_user->listUser();
	}
}
?>