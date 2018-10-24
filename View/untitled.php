<!-- File dùng để test, không có gì đặc biệt -->

<?php
	session_start();
	//session_destroy();

	//unset($_SESSION['Diem-Reading']);
	//unset($_SESSION['Diem-Listening']);
	echo $_SESSION['login_id'];
	echo $_SESSION['Diem-Reading'].'<br>'.$_SESSION['Diem-Listening'];

?>
