<?php
if(isset($_POST["txtEmail"]))
{
	include("../Controller/controller_admin.php");
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	$get = new controller_admin();
	$email = filter_var($_POST["txtEmail"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$pass = filter_var($_POST["txtPassword"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$ho = filter_var($_POST["txtHo"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$ten = filter_var($_POST["txtTen"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$userInfo = $get->get_user_by_email($email);
	if($userInfo && $email!='') {
		die('<script>document.getElementById("email-result").style.display = "block";
		document.getElementById("submit-add-user").disabled = true;</script>Email đã tồn tại trong hệ thống!');
	}else{
		die('<script>document.getElementById("email-result").style.display = "none";
		document.getElementById("submit-add-user").disabled = false;</script>');
	}
}
?>