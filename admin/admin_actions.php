<?php
    require_once("../Controller/controller_admin.php");
	if(isset($_POST['add-user']))
	{
        $name = $_POST['hoten'];
        $sex = $_POST['sex'];
        $pass = $_POST['matkhau'];
        $role = $_POST['role'];
        $mail = $_POST['email'];
        $add = new controller_admin();
        $add->add_user($name,$sex,$pass,$role,$mail);
		header("location:index.php?a=nguoidung");
	}
?>