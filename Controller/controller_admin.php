<?php
require_once("../Model/model_admin.php");
$rows = null;

class controller_admin extends model_admin
{
    // Thanh menu ben trai
    function sideBar_Nav($p)
    {
        switch ($p) {
            case "nguoidung":
                $a2 = "class=active";
                break;
            case "dethi":
                $a3 = "class=active";
                break;
            case "cauhoi":
                $a4 = "class=active";
                break;
            case "tintuc":
                $a5 = "class=active";
                break;
            case "thongbao":
                $a6 = "class=active";
                break;
            default:
                $a1 = "class=active";
                break;
        }
        echo '
            <div class="logo">
                <a href="<?=BASE_URL?>Admin" class="simple-text">ADMIN</a>
            </div>
            <ul class="nav">
                <li ' . (isset($a1) ? $a1 : "") . '><a href="index.php"><i class="pe-7s-home"></i><p>Trang chính</p></a></li>
                <li ' . (isset($a2) ? $a2 : "") . '><a href="index.php?p=nguoidung"><i class="pe-7s-user"></i><p>Người dùng</p></a></li>
                <li ' . (isset($a3) ? $a3 : "") . '><a href="index.php?p=dethi"><i class="pe-7s-note2"></i><p>Đề thi</p></a></li>
                <li ' . (isset($a4) ? $a4 : "") . '><a href="index.php?p=cauhoi"><i class="pe-7s-news-paper"></i><p>Câu hỏi</p></a></li>
                <li ' . (isset($a5) ? $a5 : "") . '><a href="index.php?p=tintuc"><i class="pe-7s-sun"></i><p>Tin tức</p></a></li>
                <li ' . (isset($a6) ? $a6 : "") . '><a href="index.php?p=thongbao"><i class="pe-7s-bell"></i><p>Thông báo</p></a></li>
            </ul>';
    }

    //In bảng người dùng trong giao diện admin
    function print_users_table($param)
    {
        $ad = new model_admin();
        if ($param == 0) {
            $kq = $ad->get_list_users();
            if (!$kq) die('Không có danh sách');
        }
        if($param==1){
            $kq=$ad->get_list_admins();
            if(!$kq) die('Không có danh sách');
        }
        if($param==2){
            $kq=$ad->get_list_teachers();
            if(!$kq) die('Không có danh sách');
        }
        if($param==3){
            $kq=$ad->get_list_students();
            if(!$kq) die('Không có danh sách');
        }

        while ($row = $kq->fetch_array()) {
            echo '<tr><td>' . $row["IdUser"] . '</td>
		<td>' . $row["Ho"] . '</td>
		<td>' . $row["Ten"] . '</td>
		<td>' . $row["GioiTinh"] . '</td>
		<td>' . $row["Mail"] . '</td>
		<td>' . $row["KichHoat"] . '</td>
		<td>' . $row["Quyen"] . '</td>
		<td>' . $row["NgayThamGia"] . '</td></tr>';
        }
    }

    function print_exam_table(){
        $ad=new model_admin();
        $kq=$ad->get_list_exam();
        if(!$kq) die('Không có danh sách');

        while ($row = $kq->fetch_array()) {
            echo '<tr><td>' . $row["MaDe"] . '</td>
		<td>' . $row["TieuDe"] . '</td>
		<td>' . $row["MoTa"] . '</td>
		<td>' . $row["ThoiLuong"] . '</td>
		<td>' . $row["SoCau"] . '</td>
		<td>' . $row["NguoiTao"] . '</td>
		<td>' . $row["NgayTao"] . '</td>
		<td>' . $row["SoLanThi"] . '</td>
		<td>' . $row["TrangThai"] . '</td></tr>';
        }
    }

    //Lấy danh sách tất cả người dùng
    function get_list_users()
    {
        $ad = new model_admin();
        $kq = $ad->get_list_users();
        if (!$kq) return $kq;
        return $this->con->error;
    }

    //Lấy danh sách admin
    function get_list_admins()
    {
        $ad = new model_admin();
        $kq = $ad->get_list_admins();
        if (!$kq) return $kq;
        return $this->con->error();
    }

    //Lấy danh sách giáo viên
    function get_list_teachers()
    {
        $ad = new model_admin();
        $kq = $ad->get_list_teachers();
        if (!$kq) return $kq;
        return $this->con->error();
    }

    //Lấy danh sách học viên
    function get_list_students()
    {
        $ad = new model_admin();
        $kq = $ad->get_list_students();
        if (!$kq) return $kq;
        return $this->con->error();
    }

    //Thêm người dùng
    function add_user($hoten, $gioitinh, $matkhau, $quyen, $mail)
    {
        $ad = new model_admin();
        $kq = $ad->add_user($hoten, $gioitinh, $matkhau, $quyen, $mail);
        if ($kq) return true;
        return false;
    }

}

?>