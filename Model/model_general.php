<?php
require_once("Model.php");
class model_general extends model{
	//Lấy danh sách câu hỏi, trắc nghiệm theo mã đề, loại câu hỏi, đáp án
	function test_get_list_questions($loaicauhoi,$made) {
		$sql = "
		SELECT ch.MaCauHoi,ch.NoiDung,tl.A,tl.B,tl.C,tl.D,DapAn 
		FROM cauhoi ch 
		JOIN dethi dt ON ch.MaDe=dt.MaDe 
		JOIN traloi tl ON ch.MaCauHoi=tl.MaCauHoi WHERE ch.LoaiCauHoi LIKE '$loaicauhoi%' AND dt.MaDe='$made'
		";
		return $sql;
	}
}
?>