<?php
require_once("Model.php");

class model_admin extends Model {
	function get_list_users() {
		$sql = "SELECT * FROM nguoidung";
		return $sql;
	}
	
	function get_list_admins() {
		$sql = "SELECT * FROM nguoidung WHERE Quyen=1";
		return $sql;
	}
	
	function get_list_teachers() {
		$sql = "SELECT * FROM nguoidung where Quyen=2";
		return $sql;
	}
	
	function get_list_students() {
		$sql = "SELECT * FROM nguoidung WHERE Quyen=3";
		return $sql;
	}
	
	function get_list_roles() {
		$sql = "SELECT * FROM quyen";
		return $sql;
	}

	function add_user($hoten, $gioitinh, $matkhau, $quyen, $mail) {
		$sql = "ALTER TABLE nguoidung AUTO_INCREMENT=1";
		$this->execute_no_return($sql);
		$sql = "INSERT INTO nguoidung(HoTen,GioiTinh,MatKhau,Quyen,Mail) 
		VALUES('$hoten','$gioitinh','$matkhau','$quyen','$mail')";
		$this->execute_no_return($sql);
	}
}
?>