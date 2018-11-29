<?php
    require_once("../Controller/controller_admin.php");
	if(isset($_POST['submit-add-user']))
	{
        $fname = $_POST['txtTen'];
        $lname = $_POST['txtHo'];
        $gender = $_POST['gender'];
        $pass = $_POST['txtPassword'];
        $role = $_POST['role'];
        $mail = $_POST['txtEmail'];
        $add = new controller_admin();
        $ketQuaThem = $add->add_user($fname,$lname,$gender,$pass,$role,$mail);
        header("location:index.php?p=nguoidung");
    }
    
    if(isset($_POST['submit-edit-user']))
    {
        $id = $_POST['txtIdUser'];
        $ten = $_POST['txtTen'];
        $ho = $_POST['txtHo'];
        $gioitinh = $_POST['gender'];
        $kichhoat = $_POST['kichhoat'];
        $quyen = $_POST['role'];
        $edit = new controller_admin();
        $ketQuaSua = $edit->action_edit_user_by_id($id,$ho,$ten,$gioitinh,$kichhoat,$quyen);
        header("location:index.php?p=nguoidung");
    }

    if(isset($_POST['submit-add-dethi']))
    {
        session_start();
        $ten = $_POST['txtTenDe'];
        $mota = $_POST['txtMoTa'];
        $thoiluong = $_POST['txtThoiLuong'];
        $socau = $_POST['txtSoCau'];
        $ngayhethan = $_POST['txtngayHetHan'];
        $nguoitao = $_SESSION['login_id'];
        $trangthai = 0;
        // echo $ten.'<br>'.$mota.'<br>'.$thoiluong.'<br>'.$socau.'<br>'.$ngayhethan.'<br>'.$nguoitao.'<br>'.$trangthai;
        $add_dethi = new controller_admin();
        $add_dethi->add_dethi($ten,$mota,$thoiluong,$socau,$ngayhethan,$nguoitao,$trangthai);
        header("location:index.php?p=dethi");
    }
?>