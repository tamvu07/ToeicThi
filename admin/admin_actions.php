<?php
    require_once("../Controller/controller_admin.php");

    function thanhCong($link) {
        echo '<script>alert("Thực hiện thành công!");</script>';
        echo '<script>document.location.href = "'.$link.'";</script>';
    }

    function thatBai($link) {
        echo '<script>alert("Thực hiện thất bại!");</script>';
        echo '<script>document.location.href = "'.$link.'";</script>';
    }

function redirect($link) {
    echo '<script>document.location.href = "'.$link.'";</script>';
}

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
        if($ketQuaThem) thanhCong('index.php?p=nguoidung');
        else thatBai('index.php?p=nguoidung');
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
        if(!$ketQuaSua) thanhCong('index.php?p=nguoidung');
        else thatBai('index.php?p=nguoidung');
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
        $ketqua = $add_dethi->add_dethi($ten,$mota,$thoiluong,$socau,$ngayhethan,$nguoitao,$trangthai);
        if(!$ketqua) thanhCong('index.php?p=dethi');
        else thatBai('index.php?p=dethi');
    }

    if(isset($_POST['submit-edit-dethi']))
    {
        $made = $_POST['txtMa'];
        $tende = $_POST['txtTen'];
        $mota = $_POST['txtMoTa'];
        $ngayhethan = str_replace('T',' ',$_POST['txtNgayHH']);
        $trangthai = $_POST['TrangThaiDe'];
        // echo $made.'<br>'.$tende.'<br>'.$mota.'<br>'.$ngayhethan.'<br>'.$trangthai;
        $edit_dethi = new controller_admin();
        $ketqua = $edit_dethi->action_edit_dethi_by_id($made,$tende,$mota,$ngayhethan,$trangthai);
        if(!$ketqua) thanhCong('index.php?p=dethi');
        else thatBai('index.php?p=dethi');
    }

    if(isset($_POST['submit-add-single-question']))
    {
        session_start();
        $made = $_POST['select-de'];
        $noidung = $_POST['txtNoiDung'];
        $loaicauhoi = $_POST['select-type'];
        $a = $_POST['singleA'];
        $b = $_POST['singleB'];
        $c = $_POST['singleC'];
        $d = $_POST['singleD'];
        $dapan = $_POST['singleDapAn'];
        $nguoitao = $_SESSION['login_id'];
        $add_question = new controller_admin();
        $kq = $add_question->add_single_question($made,$noidung,$loaicauhoi,$nguoitao,$a,$b,$c,$d,$dapan);
        if($kq)
            thanhCong('index.php?p=cauhoi');
        else
            thatBai('index.php?p=cauhoi');
    }

    if(isset($_POST['submit-add-parent-question']))
    {
        session_start();
        $nguoitao = $_SESSION['login_id'];
        $made = $_POST['select-de'];
        $loaicauhoi = $_POST['select-type'];
        $noidung = $_POST['txtDoanVan'];
        $_SESSION['subQuestionCount'] = $_POST['select-sub-question-count'];
        $p = new controller_admin();
        $kq = $p->add_parent_question($made,$loaicauhoi,$noidung,$nguoitao);
        if($kq)
        {
            $_SESSION['MaCauHoi'] = $p->get_last_question_id();
            thanhCong('index.php?p=themcauhoi&nhom=1&subquestion');
        }
        else
            thatBai('index.php?p=cauhoi');
    }

    if(isset($_POST['submit-add-child-question']))
    {
        $p = new controller_admin();
        session_start();
        $_SESSION['subQuestionCount'] = $_SESSION['subQuestionCount'] - 1;
        if($_SESSION['subQuestionCount']==-1)
        {
            unset($_SESSION['MaCauHoi']);
            unset($_SESSION['subQuestionCount']);
            echo '<script>alert("Đã thêm đủ câu hỏi nhỏ!")</script>';
            redirect('index.php?p=cauhoi');
        }
        else
        {
            $macauhoi = $_SESSION['MaCauHoi'];
            $content = $p->get_fresh_question_by_id($macauhoi);
            $contentt = $content->fetch_assoc();
            $loaicauhoi = $contentt['LoaiCauHoi'];
            $noidung = $_POST['txtNoiDungSub'];
            $a = $_POST['subA'];
            $b = $_POST['subB'];
            $c = $_POST['subC'];
            $d = $_POST['subD'];
            $dapan = $_POST['subDapAn'];
            $check = $p->add_child_question($macauhoi,$loaicauhoi,$noidung,$a,$b,$c,$d,$dapan);
            if($check)
                thanhCong('index.php?p=themcauhoi&nhom=1&subquestion');
            else
                thatBai('index.php?p=cauhoi');
        }
    }
?>