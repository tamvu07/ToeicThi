
    <link rel="stylesheet" href="css/Thanh-Style-testing.css"/>
    <div id="container">
    <div id="main-contain-test" class="col-md-8">
<?php
	require_once("../Controller/controller_lambaithi.php");
	$p = new controller_lambaithi();
	$iduser = $_SESSION['login_id'];
	$made = $_GET['id'];
	$diemdoc = $_SESSION['Diem-Reading'];
	$diemnghe = $_SESSION['Diem-Listening'];
	$tongdiem = $diemnghe+$diemdoc;
	if(!isset($_SESSION['Diem-Reading']))
		echo 'Bạn chỉ có thể xem kết quả khi vừa mới nộp bài! Nếu muốn xem các kết quả bài làm của mình thì hãy vào trang cá nhân.';
	else
	{
		echo '<br>Kết quả của '.$_SESSION['login_lname'].' '.$_SESSION['login_fname'].' sau khi đề TOEIC Số '.$_GET['id'];
	echo '<br>Điểm nghe: '.$diemnghe;
	echo '<br>Điểm đọc: '.$diemdoc;
	echo '<br>Tổng điểm: '.$tongdiem;
	echo '<form method="post">';
	echo '<button type="submit" name="save-scores">Lưu điểm</button></form>';
	echo '<form method="post">';
	echo '<button type="submit" name="cancel-scores">Hủy điểm để làm lại bài</button></form>';

	if(isset($_SESSION['Diem-Reading']) && isset($_SESSION['Diem-Listening']) && isset($_POST['save-scores'])){
			$p->test_save_scores($iduser,$made,$diemdoc,$diemnghe);
		unset($_SESSION['Diem-Reading']);
		unset($_SESSION['Diem-Listening']);
		header("location:../../../View/index.php");}
	}
	
	if(isset($_POST['cancel-scores']))
	{
		unset($_SESSION['Diem-Reading']);
		unset($_SESSION['Diem-Listening']);
		header("location:../../../View/index.php");
	}
?></div></div>