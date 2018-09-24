<?php
	$sql_server = "localhost";
	$sql_user = "root";
	$sql_password = "thienvip123";
	$sql_database = "toeicdb";
	$con = mysql_connect($sql_server,$sql_user,$sql_password);
	if(!$con)
	{
		echo "Không thể kết nối với CSDL".mysql_error();
		exit();
	}
	else
	mysql_select_db($sql_database);
	mysql_query("set names utf8");
	$liveSite = 'http://localhost/ToeicThi';
?>