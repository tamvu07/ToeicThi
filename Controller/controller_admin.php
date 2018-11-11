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
    function print_users_table($rows, $p)
    {
        echo '
		<table class="table table-hover table-striped">
			<thead>
				<th>ID</th> 
				<th>Họ tên</th>
				<th>Giới tính</th>
				<th>Email</th>
				<th>Quyền</th>
				<th>Ngày tham gia</th>
				<th>Trạng thái</th>
			</thead>
			<tbody>';
        while ($rows = $p->load_rows()) {
            echo '<tr><td>' . $rows["IdUser"] . '</td>
		<td>' . $rows["HoTen"] . '</td>
		<td>' . $rows["GioiTinh"] . '</td>
		<td>' . $rows["Mail"] . '</td>
		<td>' . $rows["Quyen"] . '</td>
		<td>' . $rows["NgayThamGia"] . '</td>
		<td>' . $rows["KichHoat"] . '</td></tr>';
        }
        echo '</tbody></table>';
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