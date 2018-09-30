<?php
require_once("model.php");

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
	
	//Lấy danh sách câu hỏi, trắc nghiệm theo mã đề, loại câu hỏi
	function test_get_list_questions($loaicauhoi,$made) {
		$sql = "
		SELECT ch.MaCauHoi,ch.NoiDung,tl.A,tl.B,tl.C,tl.D 
		FROM cauhoi ch 
		JOIN dethi dt ON ch.MaDe=dt.MaDe 
		JOIN traloi tl ON ch.MaCauHoi=tl.MaCauHoi WHERE ch.LoaiCauHoi LIKE '$loaicauhoi%' AND dt.MaDe='$made'
		";
		return $sql;
	}
	
	//Đáp án của câu hỏi theo mã câu hỏi
	function test_get_question_with_right_answer() {
		$sql = "SELECT o.MaCauHoi,NoiDung,DapAn FROM cauhoi o JOIN traloi t ON o.MaCauHoi=t.MaCauHoi";
		return $sql;
	}
}
?>