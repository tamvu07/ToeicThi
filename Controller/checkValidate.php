<?php
require_once "../Controller/controller_main.php";
$toeic=new controller_main();

if(isset($_GET['email-thanh'])){
    $email=$_GET['email-thanh'];
    if($email=="") echo "<strong>CHƯA NHẬP EMAIL !</strong>";
    if ( $email != "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) echo "<strong>EMAIL KHÔNG PHÙ HỢP !</strong>";
}


if(isset($_GET['email'])){
    $email=$_GET['email'];
/*    if($email=="") echo "<strong>CHƯA NHẬP EMAIL !</strong>";
    else*/
    	if ( $email != "" && !filter_var($email, FILTER_VALIDATE_EMAIL) ) 
    		{
    			echo "<strong>EMAIL KHÔNG PHÙ HỢP !</strong>";
    		}
}

if(isset($_GET['email']))
{
	$email = $_GET['email'];
	if($email != "")
	{
		$kq = $toeic->getUserByEmail($email);
		if($kq)
		{
			echo "<strong>EMAIL ĐÃ TỒN TẠI !</strong>";
		}
	}
}

if(isset($_GET['pass']) && isset($_GET['repass']))
{
	$pass = $_GET['pass'];
	$repass = $_GET['repass'];
	if($pass != "" && $repass != "" )
	{
		if($pass != $repass)
		{
			echo "<strong>REPASSWORD KHÔNG ĐÚNG !</strong>";
		}
	}
}
?>