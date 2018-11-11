<?php

require_once("../Model/model_lambaithi.php");
class controller_lambaithi extends model_lambaithi {

	//Lấy mô tả của các phần câu hỏi
	function test_get_part_description($loaicauhoi)
	{
		$p = new model_lambaithi();
		$p->select($p->test_get_part_description($loaicauhoi));
		$rows=$p->load_rows();
			echo '<br><div class="description"><b>'.$rows["MoTa"].'</b></div><br>';
	}

	//Lấy về danh sách câu hỏi, câu trả lời và đáp án
	//In câu hỏi, 4 đáp án ABCD, dùng chung cho hầu hết các câu hỏi
	function test_get_list_questions($loaicauhoi,$made)
	{
		$p = new model_lambaithi();
		$p->select($p->test_get_list_questions($loaicauhoi,$made));
		if($loaicauhoi=='R')
			$i=101;
		else
			$i=1;
		while($rows=$p->load_rows()) {
			//Dựa vào số câu hiện tại để in ra mô tả cho phần câu hỏi đó
			if($i==1)
				$this->test_get_part_description('L-HINHANH');
			else if($i==11)
				$this->test_get_part_description('L-HOIDAP');
			else if($i==41)
				$this->test_get_part_description('L-HOITHOAI');
			else if($i==71)
				$this->test_get_part_description('L-NOICHUYEN');
			else if($i==101)
				$this->test_get_part_description('R-DIENCAU');
			else if($i==141)
				$this->test_get_part_description('R-DIENDOANVAN');
			else if($i==155)
				$this->test_get_part_description('R-HOIDOANVAN');
			if($rows['D']=='(D)')
			{
				echo '<table cellspacing="5" cellpadding="10" style="font-size:110%;">';
				echo '<tr><td rowspan="3"><div class="question_num"><b>Câu '.$i++.'. </b>'.'</div></td>';
				echo '<td colspan="2">'.$rows["NoiDung"].'</td></tr><br>';
				echo '<tr><td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["A"].'"> '.$rows["A"].' </td>';
				echo '<td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["B"].'"> '.$rows["B"].' </td></tr>';
				echo '<tr><td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["C"].'"> '.$rows["C"].' </td>';
				echo '<td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["D"].'"> '.$rows["D"].'</td></tr>';
				echo '</table>';
				echo '<hr width="50%">';
			}
			else if($rows['D']=='X')
			{
				echo '<table cellspacing="5" cellpadding="10" style="font-size:110%;">';
				echo '<tr><td rowspan="3"><div class="question_num"><b>Câu '.$i++.'. </b>'.'</div></td>';
				echo '<td colspan="2">'.$rows["NoiDung"].'</td></tr><br>';
				echo '<tr><td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["A"].'"> '.$rows["A"].' </td>';
				echo '<td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["B"].'"> '.$rows["B"].' </td></tr>';
				echo '<tr><td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["C"].'"> '.$rows["C"].' </td></tr>';
				echo '</table>';
				echo '<hr width="50%">';
			}
			else
			{
				echo '<table cellspacing="5" cellpadding="10" style="font-size:110%;">';
				echo '<tr><td rowspan="3"><div class="question_num"><b>Câu '.$i++.'. </b>'.'</div></td>';
				echo '<td colspan="2">'.$rows["NoiDung"].'</td></tr><br>';
				echo '<tr><td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["A"].'"> A. '.$rows["A"].' </td>';
				echo '<td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["B"].'"> B. '.$rows["B"].' </td></tr>';
				echo '<tr><td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["C"].'"> C. '.$rows["C"].' </td>';
				echo '<td><input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["D"].'"> D. '.$rows["D"].'</td></tr>';
				echo '</table>';
				echo '<hr width="50%">';
			}
		}
	}
	
	//Tính điểm bài làm (sử dụng để tính phần thi nghe hoặc đọc)
	function count_reading_scores($loaicauhoi,$made) {
		$diemreading = 5;
		$mark = 0;
		$p = new model_lambaithi();
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
		$p = new model_lambaithi();
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
		$p = new model_lambaithi();
		$p->test_save_scores($iduser,$made,$diemdoc,$diemnghe);
	}

	function test_get_scores($iduser,$made)
	{
		$p = new model_lambaithi();
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