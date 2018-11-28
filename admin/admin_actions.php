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
        // echo '
        // ID: '.$id.'<br>
        // Ten: '.$ten.'<br>
        // Ho: '.$ho.'<br>
        // Gioi Tinh: '.$gioitinh.'<br>
        // KH: '.$kichhoat.'<br>
        // Q: '.$quyen.'<br>
        // ';
        $ketQuaSua = $edit->action_edit_user_by_id($id,$ho,$ten,$gioitinh,$kichhoat,$quyen);
        header("location:index.php?p=nguoidung");
    }
?>