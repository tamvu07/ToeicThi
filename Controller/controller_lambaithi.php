<?php

require_once("../Model/model_general.php");
class controller_lambaithi extends model_general {
	
	//Lấy về danh sách câu hỏi, câu trả lời và đáp án
	//In câu hỏi, 4 câu trả lời
	function test_get_list_questions($loaicauhoi,$made)
	{
		$p = new model_general();
		$p->select($p->test_get_list_questions($loaicauhoi,$made));
		$i=1;
		while($rows=$p->load_rows()) {
			echo ''.$i++.'.'.$rows["NoiDung"].'<br>';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["A"].'"> A. '.$rows["A"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["B"].'"> B. '.$rows["B"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["C"].'" checked> C. '.$rows["C"].' ';
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
					else if($mark>9 && $mark<=24) $diemreading+=5;
					else if($mark==25 || $mark==28 || $mark==39 || $mark==43 || $mark==47 || $mark==52 || $mark==55 || $mark==64 || $mark==89 || $mark==92 || $mark==94) $diemreading+=10;
					else if($mark>25 && $mark<=27) $diemreading+=5;
					else if($mark>28 && $mark<=38) $diemreading+=5;
					else if($mark>39 && $mark<=42) $diemreading+=5;
					else if($mark>43 && $mark<=46) $diemreading+=5;
					else if($mark>47 && $mark<=51) $diemreading+=5;
					else if($mark>52 && $mark<=54) $diemreading+=5;
					else if($mark>55 && $mark<=63) $diemreading+=5;
					else if($mark>64 && $mark<=81) $diemreading+=5;
					else if($mark==82) $diemreading+=0;
					else if($mark>82 && $mark<=88) $diemreading+=5;
					else if($mark>89 && $mark<=91) $diemreading+=5;
					else if($mark>92 && $mark<=93) $diemreading+=5;
					else if($mark>94 && $mark<=97) $diemreading+=5;
					else $diemreading+=0;
					
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
					if($mark <= 9) $diemlistening=5;
					else if($mark>9 && $mark<=24) $diemlistening+=5;
					else if($mark==25 || $mark==28 || $mark==39 || $mark==43 || $mark==47 || $mark==52 || $mark==55 || $mark==64 || $mark==89 || $mark==92 || $mark==94) $diemlistening+=10;
					else if($mark>25 && $mark<=27) $diemlistening+=5;
					else if($mark>28 && $mark<=38) $diemlistening+=5;
					else if($mark>39 && $mark<=42) $diemlistening+=5;
					else if($mark>43 && $mark<=46) $diemlistening+=5;
					else if($mark>47 && $mark<=51) $diemlistening+=5;
					else if($mark>52 && $mark<=54) $diemlistening+=5;
					else if($mark>55 && $mark<=63) $diemlistening+=5;
					else if($mark>64 && $mark<=81) $diemlistening+=5;
					else if($mark==82) $diemlistening+=0;
					else if($mark>82 && $mark<=88) $diemlistening+=5;
					else if($mark>89 && $mark<=91) $diemlistening+=5;
					else if($mark>92 && $mark<=93) $diemlistening+=5;
					else if($mark>94 && $mark<=97) $diemlistening+=5;
					else $diemlistening+=0;
					
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