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
            case "themnguoidung":
                $a2 = "class=active";
                break;
            case "dethi":
                $a3 = "class=active";
                break;
            case "themdethi":
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
                <a href="#" class="simple-text">ADMIN</a>
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
            <td>' . $row["NgayThamGia"] . '</td>
            <td><a href="?p=nguoidung&edituser='.$row["IdUser"].'"><button type="button" rel="tooltip" title="Sửa người dùng" class="btn btn-info btn-fill edit" name="btn-edit" id="'.$row["IdUser"].'"><i class="fa fa-edit"></i></button></a></td>
            </tr>
            ';
        }
    }

    function print_exam_table(){
        $ad=new model_admin();
        $kq=$ad->get_list_exam();
        if(!$kq) die('Không có danh sách');

        while ($row = $kq->fetch_array()) {
            echo '<tr><td>' . $row["MaDe"] . '</td> 
            <td>' . $row["TieuDe"] . '</td>
            <td>' . $row["ThoiLuong"] . '</td>
            <td>' . $row["SoCau"] . '</td>
            <td>' . $row["NguoiTao"] . '</td>
            <td>' . $row["NgayTao"] . '</td>
            <td>' . $row["NgayHetHan"] . '</td>
            <td>' . $row["LuotDangKi"] . '</td>
            <td>' . $row["TrangThai"] . '</td>
            <td><a href="?p=dethi&made='.$row['MaDe'].'"><button type="button" rel="tooltip" title="Xem đề thi" class="btn btn-info btn-fill edit" name="btn-edit" id="'.$row["MaDe"].'"><i class="fa fa-edit"></i></button></td>
            </tr>';
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
    function add_user($ho,$ten, $gioitinh, $matkhau, $quyen, $mail)
    {
        $add = new model_admin();
        $kq = $add->add_user($ho,$ten, $gioitinh, $matkhau, $quyen, $mail);
        if ($kq) return true;
        return false;
    }

    //Lấy thông tin người dùng từ Email, mục đích kiểm tra xem người dùng có trong hệ thống chưa
    function get_user_by_email($email)
    {
        $get = new model_admin();
        $userInfo = $get->get_user_by_email($email);
        if($userInfo) return true;
        return false;
    }

    function get_edit_user_by_id($id)
    {
        $get = new model_admin();
        $userInfo = $get->get_edit_user_by_id($id);
        if($userInfo)
        {
            $info = $userInfo->fetch_assoc();
            $ho = $info["Ho"];
            $ten = $info["Ten"];
            $gioitinh = $info["GioiTinh"];
            if($gioitinh=='Nam')
                $gioitinhkhac='Nữ';
            else
                $gioitinhkhac='Nam';
            $kichhoat = $info["KichHoat"];
            if($kichhoat==0)
                $kichhoatkhac=1;
            else $kichhoatkhac=0;
            $quyen = $info["Quyen"];
            if($quyen==1){$quyen2=2; $quyen3=3;}
            if($quyen==2){$quyen2=1; $quyen3=3;}
            if($quyen==3){$quyen2=2; $quyen3=1;}
            echo '
            <br>
            <fieldset>
            <legend style="color:blue;font-weight:bold;text-align:center;">SỬA NGƯỜI DÙNG</legend>
            <form method="POST" action="admin_actions.php">
            <table width="100%" class="table table-cover">
            <thead>
            <th>ID</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Giới tính</th>
            <th>Email</th>
            <th>Kích hoạt</th>
            <th>Quyền</th>
            <th>Ngày tham gia</th>
            <th>Hành động</th>
            </thead>
            <tr><td><input type="text" class="form-control" name="txtIdUser" value="' . $info["IdUser"] . '" style="width:40px;" readOnly="true"></td>
            <td><input type="text" class="form-control" name="txtHo" value="' . $info["Ho"] . '" style="width:150px;"></td>
            <td><input type="text" class="form-control" name="txtTen" value="' . $info["Ten"] . '" style="width:150px;"></td>
            <td><select name="gender" class="form-control">
            <option value="'.$gioitinh.'">'.$gioitinh.'</option>
            <option value="'.$gioitinhkhac.'">'.$gioitinhkhac.'</option>
            </select></td>
            <td>' . $info["Mail"] . '</td>
            <td><select name="kichhoat" class="form-control">
            <option value="'.$kichhoat.'">'.$kichhoat.'</option>
            <option value="'.$kichhoatkhac.'">'.$kichhoatkhac.'</option>
            </select>
            </td>
            <td><select name="role" class="form-control">
            <option value="'.$quyen.'">'.$quyen.'</option>
            <option value="'.$quyen2.'">'.$quyen2.'</option>
            <option value="'.$quyen3.'">'.$quyen3.'</option>
            </select>
            </td>
            <td>' . $info["NgayThamGia"] . '</td>
            <td><button type="submit" rel="tooltip" title="Lưu" class="btn btn-info btn-fill" name="submit-edit-user" id="submit-edit-user"><i class="fa fa-save"></i></button>
            <a href="index.php?p=nguoidung"><button type="button" rel="tooltip" title="Hủy" class="btn btn-danger btn-fill"><i class="fa fa-refresh"></i></button></a></td>
            </tr>
            </table></form></fieldset>
            ';
        }
        else
            echo 'Không tìm thấy người dùng này!';
    }

    function action_edit_user_by_id($id,$ho,$ten,$gioitinh,$kichhoat,$quyen)
    {
        $edit = new model_admin();
        $kq = $edit->action_edit_user_by_id($id,$ho,$ten,$gioitinh,$kichhoat,$quyen);
        if($kq) return true;
        return false;
    }

    // function delete_user_by_id($id)
    // {
    //     $del = new model_admin();
    //     $kq = $del->delete_user_by_id($id);
    //     if($kq) return true;
    //     return false;
    // }

    function get_question_numbers($made,$loaicauhoi)
    {
        $getq = new model_admin();
        $kq = $getq->get_question_numbers($made,$loaicauhoi);
        return $kq;
    }
    
    function add_dethi($ten,$mota,$thoiluong,$socau,$ngayhethan,$nguoitao,$trangthai)
    {
        $add_dt = new model_admin();
        $kq = $add_dt->add_dethi($ten,$mota,$thoiluong,$socau,$ngayhethan,$nguoitao,$trangthai);
        if($kq) return true;
        return false;
    }

    function get_dethi_by_id($made)
    {
        $dt = new model_admin();
        $kq = $dt->get_dethi_by_id($made);
        return $kq;
    }

    function action_edit_dethi_by_id($made,$tende,$mota,$ngayhethan,$trangthai)
    {
        $edit_de = new model_admin();
        $kq = $edit_de->action_edit_dethi_by_id($made,$tende,$mota,$ngayhethan,$trangthai);
        if($kq)
            return true;
        return false;
    }
}

?>