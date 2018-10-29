<?php

require_once("../Model/model_general.php");
class controller_lambaithi extends model_general {
	
	//Lấy về danh sách câu hỏi, câu trả lời và đáp án
	//In câu hỏi, 4 câu trả lời
	function test_get_list_questions($loaicauhoi,$made)
	{
		$p = new model_general();
		$p->select($p->test_get_list_questions($loaicauhoi,$made));
		if($loaicauhoi=='R')
			$i=101;
		else
			$i=1;
		while($rows=$p->load_rows()) {
			echo 'Câu '.$i++.'.'.$rows["NoiDung"].'<br>';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["A"].'"> A. '.$rows["A"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["B"].'"> B. '.$rows["B"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["C"].'"> C. '.$rows["C"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["D"].'"> D. '.$rows["D"];
			echo '<hr width="50%">';
		}
	}
	
	//Tính điểm bài làm (sử dụng để tính phần thi nghe hoặc đọc)
	function count_reading_scores($loaicauhoi,$made) {
		$diemreading = 5;
		$mark = 0;
		$p = new model_general();
		$p->select($p->test_get_list_questions($loaicauhoi,$made));
		while($ans=$p->load_rows())
		{
			$an = $ans['MaCauHoi'];
			if(isset($_POST[$an]))
			{
				if($_POST[$ans['MaCauHoi']] == $ans['DapAn'])
				{
					++$mark;
					if($mark <= 9) $diemreading=5;
					else if($mark==25 || $mark==28 || $mark==39 || $mark==43 || $mark==47 || $mark==52 || $mark==55 || $mark==64 || $mark==89 || $mark==92 || $mark==94)
						$diemreading+=10;
					else if($mark>9 && $mark<=97)
						$diemreading+=5;
					else
						$diemreading+=0;
					
				}
			}
		}
			$_SESSION['Diem-Reading'] = $diemreading;
	}

	function count_listening_scores($loaicauhoi,$made)
	{
		$diemlistening = 5;
		$mark = 0;
		$p = new model_general();
		$p->select($p->test_get_list_questions($loaicauhoi,$made));
		while($ans=$p->load_rows())
		{
			$an = $ans['MaCauHoi'];
			if(isset($_POST[$an]))
			{
				if($_POST[$ans['MaCauHoi']] == $ans['DapAn'])
				{
					++$mark;
					if($mark <= 6) $diemlistening = 5;
					else if($mark == 31 || $mark == 39 || $mark == 44 || $mark == 45 || $mark == 54 || $mark == 58 || $mark == 70 || $mark == 75 || $mark == 80 || $mark == 85 || $mark == 88)
						$diemlistening+=10;
					else if($mark > 6 && $mark <= 93)
						$diemlistening+=5;
					else
						$diemlistening+=0;					
				}
			}
		}
			$_SESSION['Diem-Listening'] = $diemlistening;
	}

	function test_save_scores($iduser,$made,$diemdoc,$diemnghe)
	{
		$p = new model_general();
		$p->test_save_scores($iduser,$made,$diemdoc,$diemnghe);
	}

	function test_get_scores($iduser,$made)
	{
		$p = new model_general();
		$p->select($p->test_get_scores($iduser,$made));
		while($rows = $p->load_rows())
		{
			echo 'Mã đề: '.$made;
			echo '<br>Điểm ĐỌC: '.$rows['DiemDoc'];
			echo '<br>Điểm NGHE: '.$rows['DiemNghe'];
		}
	}

}

?>