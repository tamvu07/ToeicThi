<!-- File dùng để test, không có gì đặc biệt -->

<?php
	session_start();
	session_destroy();
	echo $_SESSION['Diem-Reading'];

?>
