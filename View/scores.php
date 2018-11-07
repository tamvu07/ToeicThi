
    <link rel="stylesheet" href="css/Thanh-Style-testing.css"/>
    <div id="container" style="padding-top:20px;">
    <div id="main-contain-test" class="col-md-6">
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
		echo '
			<center><table id="score-table" cellpadding="10px">
				<tr><td colspan="2" class="t-head"><h2>Kết quả của '.$_SESSION["login_lname"].' '.$_SESSION["login_fname"].' sau khi hoàn thành đề TOEIC Số '.$made.'</h2></td></tr>
				<tr><td><center>Điểm NGHE: '.$diemnghe.'</center></td><td><center>Điểm ĐỌC: '.$diemdoc.'</center></td></tr>
				<tr><td colspan="2" class="t-sum">Tổng điểm: '.$tongdiem.'</td></tr>
				<tr><td><form method="POST"><button type="submit" name="save-scores" class="btn btn-success">Lưu điểm</button></form></td><td><form method="POST"><button type="submit" name="cancel-scores" class="btn btn-info">Hủy điểm</button></form></td></tr>
			</table></center>
		';
	
		if(isset($_POST['save-scores']))
		{
			$p->test_save_scores($iduser,$made,$diemdoc,$diemnghe);
			unset($_SESSION['Diem-Reading']);
			unset($_SESSION['Diem-Listening']);
			header("location:../../../View/index.php");
		}
		if(isset($_POST['cancel-scores']))
		{
			unset($_SESSION['Diem-Reading']);
			unset($_SESSION['Diem-Listening']);
			header("location:../../../View/index.php");
		}
	}
	
	
?></div></div>