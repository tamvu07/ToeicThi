<?php
	require_once("../Controller/controller_lambaithi.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		session_start();
		$loaicauhoi = 'R';
		$made = 1;
		$p = new controller_lambaithi();
		$p->test_get_list_questions($loaicauhoi,$made); // in ra câu hỏi và trắc nghiệm
		if(isset($_POST['submit-test']))
		{
			$p->count_scores($loaicauhoi,$made); // tính điểm dựa trên số câu người dùng chọn (tạm thời: 1 câu đúng 5đ)
		}
	?>
</body>
</html>