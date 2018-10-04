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
		echo '<form method="post">';
		while($rows=$p->load_rows()) {
			echo ''.$i++.'.'.$rows["NoiDung"].'<br>';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["A"].'">A. '.$rows["A"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["B"].'">B. '.$rows["B"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["C"].'" checked>C. '.$rows["C"].' ';
			echo '<input type="radio" name="'.$rows["MaCauHoi"].'" value="'.$rows["D"].'">D. '.$rows["D"].'<br><br>';
		}
		echo '
		<br><button type="submit" name="submit-test">Nộp bài</button>
		</form>';
	}
	
	//Tính điểm bài làm (sử dụng để tính phần thi nghe hoặc đọc)
	function count_scores($loaicauhoi,$made) {
		$diem = 5;
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
					if($mark <= 9) $diem=5;
					else if($mark>9 && $mark<=24) $diem+=5;
					else if($mark==25 || $mark==28 || $mark==39 || $mark==43 || $mark==47 || $mark==52 || $mark==55 || $mark==64 || $mark==89 || $mark==92 || $mark==94) $diem+=10;
					else if($mark>25 && $mark<=27) $diem+=5;
					else if($mark>28 && $mark<=38) $diem+=5;
					else if($mark>39 && $mark<=42) $diem+=5;
					else if($mark>43 && $mark<=46) $diem+=5;
					else if($mark>47 && $mark<=51) $diem+=5;
					else if($mark>52 && $mark<=54) $diem+=5;
					else if($mark>55 && $mark<=63) $diem+=5;
					else if($mark>64 && $mark<=81) $diem+=5;
					else if($mark==82) $diem+=0;
					else if($mark>82 && $mark<=88) $diem+=5;
					else if($mark>89 && $mark<=91) $diem+=5;
					else if($mark>92 && $mark<=93) $diem+=5;
					else if($mark>94 && $mark<=97) $diem+=5;
					else $diem+=0;
					
				}
			}
		}
			$_SESSION['Diem'] = $diem;
			echo $_SESSION['Diem'];
	}

}

?>