<?php
require_once("Model.php");
class model_lambaithi extends model {
	//Lấy danh sách câu hỏi, trắc nghiệm theo mã đề, loại câu hỏi, đáp án
	function test_get_list_questions($loaicauhoi,$made)
	{
		$sql = "
			SELECT ch.MaCauHoi,ch.NoiDung,tl.A,tl.B,tl.C,tl.D,DapAn 
			FROM cauhoi ch
			JOIN traloi tl ON ch.MaCauHoi=tl.MaCauHoi WHERE ch.LoaiCauHoi LIKE '$loaicauhoi%' AND ch.MaDe='$made'
			ORDER BY ch.STT ASC
		";
		return $sql;
	}

	//Lấy mô tả của phần câu hỏi tương ứng
	function test_get_part_description($loaicauhoi)
	{
		$sql = "SELECT MoTa FROM loaicauhoi WHERE MaLoai='$loaicauhoi'";
		return $sql;
	}

	function test_save_scores($iduser,$made,$diemdoc,$diemnghe) {
		$sql = "ALTER TABLE bailam AUTO_INCREMENT=1";
		$this->execute_no_return($sql);
		$sql = "
			INSERT INTO bailam(IdUser,MaDe,DiemDoc,DiemNghe)
			VALUES('$iduser','$made','$diemdoc','$diemnghe')
		";
		$this->execute_no_return($sql);
	}

	function test_get_scores($iduser,$made)
	{
		$sql = "SELECT DiemDoc, DiemNghe FROM bailam WHERE IdUser='$iduser' AND MaDe='$made'";
		return $sql;
	}
}