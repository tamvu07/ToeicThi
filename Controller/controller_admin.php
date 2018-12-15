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
            case "themcauhoi":
                $a4 = "class=active";
                break;
            case "tintuc":
                $a5 = "class=active";
                break;
            case "themtintuc":
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
        if ($param == 1) {
            $kq = $ad->get_list_admins();
            if (!$kq) die('Không có danh sách');
        }
        if ($param == 2) {
            $kq = $ad->get_list_teachers();
            if (!$kq) die('Không có danh sách');
        }
        if ($param == 3) {
            $kq = $ad->get_list_students();
            if (!$kq) die('Không có danh sách');
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
            <td><a href="?p=nguoidung&edituser=' . $row["IdUser"] . '"><button type="button" rel="tooltip" title="Sửa người dùng" class="btn btn-info btn-fill edit" name="btn-edit" id="' . $row["IdUser"] . '"><i class="fa fa-edit"></i></button></a></td>
            </tr>
            ';
        }
    }

    function print_exam_table()
    {
        $ad = new model_admin();
        $kq = $ad->get_list_exam();
        if (!$kq) die('Không có danh sách');

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
            <td><a href="?p=dethi&made=' . $row['MaDe'] . '"><button type="button" rel="tooltip" title="Xem đề thi" class="btn btn-info btn-fill edit" name="btn-edit" id="' . $row["MaDe"] . '"><i class="fa fa-edit"></i></button></td>
            </tr>';
        }
    }

    function print_exam_options()
    {
        $p = new model_admin();
        $kq = $p->get_list_exam();
        while ($row = $kq->fetch_array()) {
            echo '<option value="' . $row['MaDe'] . '" ' . ($_POST['select_de'] == $row['MaDe'] ? "selected" : "") . '>' . $row['TieuDe'] . '</option>
                    ';
        }
    }

    function print_exam_options_by_status($trangthai)
    {
        $p = new model_admin();
        $kq = $p->get_list_exam_by_status($trangthai);
        while ($row = $kq->fetch_array()) {
            echo '<option value="' . $row['MaDe'] . '" ' . ($_POST['select_de'] == $row['MaDe'] ? "selected" : "") . '>' . $row['TieuDe'] . '</option>
                    ';
        }
    }

    function print_question_table($loaicauhoi, $dethi)
    {
        $et = new model_admin();
        $kq = NULL;
        if ($loaicauhoi == 'TATCA')
            $kq = $et->get_all_questions_by_made($dethi);
        else
            $kq = $et->get_question_by_type_made($loaicauhoi, $dethi);
        while ($row = $kq->fetch_assoc()) {
            echo '<tr><td>' . $row["MaCauHoi"] . '</td>
            <td>' . $row["MaDe"] . '</td>
            <td>' . $row["LoaiCauHoi"] . '</td>
            <td>' . $row["NoiDung"] . '</td>
            <td>' . $row["A"] . '</td>
            <td>' . $row["B"] . '</td>
            <td>' . $row["C"] . '</td>
            <td>' . $row["D"] . '</td>
            <td>' . $row["DapAn"] . '</td>
            <td>' . $row["TrangThai"] . '</td>
            <td><a href="?p=cauhoi&macauhoi=' . $row['MaCauHoi'] . '"><button type="button" rel="tooltip" title="Sửa câu hỏi" class="btn btn-info btn-fill edit" name="btn-edit-question" id="' . $row["MaCauHoi"] . '"><i class="fa fa-edit"></i></button></td>
            </tr>';
        }
    }

    function print_question_details($macauhoi)
    {

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
    function add_user($ho, $ten, $gioitinh, $matkhau, $quyen, $mail)
    {
        $add = new model_admin();
        $kq = $add->add_user($ho, $ten, $gioitinh, $matkhau, $quyen, $mail);
        if ($kq) return true;
        return false;
    }

    //Lấy thông tin người dùng từ Email, mục đích kiểm tra xem người dùng có trong hệ thống chưa
    function get_user_by_email($email)
    {
        $get = new model_admin();
        $userInfo = $get->get_user_by_email($email);
        if ($userInfo) return true;
        return false;
    }

    function get_edit_user_by_id($id)
    {
        $get = new model_admin();
        $userInfo = $get->get_edit_user_by_id($id);
        if ($userInfo) {
            $info = $userInfo->fetch_assoc();
            $ho = $info["Ho"];
            $ten = $info["Ten"];
            $gioitinh = $info["GioiTinh"];
            $kichhoat = $info["KichHoat"];
            $quyen = $info["Quyen"];
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
            <option value="Nam" ' . ($info['GioiTinh'] == 'Nam' ? "selected" : "") . '>Nam</option>
            <option value="Nữ" ' . ($info['GioiTinh'] == 'Nữ' ? "selected" : "") . '>Nữ</option>
            </select></td>
            <td>' . $info["Mail"] . '</td>
            <td><select name="kichhoat" class="form-control">
            <option value="1" ' . ($info['KichHoat'] == 1 ? "selected" : "") . '>1</option>
            <option value="0" ' . ($info['KichHoat'] == 0 ? "selected" : "") . '>0</option>
            </select>
            </td>
            <td><select name="role" class="form-control">
            <option value="1" ' . ($info['Quyen'] == 1 ? "selected" : "") . '>1</option>
            <option value="2" ' . ($info['Quyen'] == 2 ? "selected" : "") . '>2</option>
            <option value="3" ' . ($info['Quyen'] == 3 ? "selected" : "") . '>3</option>
            </select>
            </td>
            <td>' . $info["NgayThamGia"] . '</td>
            <td><button type="submit" rel="tooltip" title="Lưu" class="btn btn-info btn-fill" name="submit-edit-user" id="submit-edit-user"><i class="fa fa-save"></i></button>
            <a href="index.php?p=nguoidung"><button type="button" rel="tooltip" title="Hủy" class="btn btn-danger btn-fill"><i class="fa fa-refresh"></i></button></a></td>
            </tr>
            </table></form></fieldset>
            ';
        } else
            echo 'Không tìm thấy người dùng này!';
    }

    function action_edit_user_by_id($id, $ho, $ten, $gioitinh, $kichhoat, $quyen)
    {
        $edit = new model_admin();
        $kq = $edit->action_edit_user_by_id($id, $ho, $ten, $gioitinh, $kichhoat, $quyen);
        if ($kq) return true;
        return false;
    }

    // function delete_user_by_id($id)
    // {
    //     $del = new model_admin();
    //     $kq = $del->delete_user_by_id($id);
    //     if($kq) return true;
    //     return false;
    // }

    function get_question_numbers($made, $loaicauhoi)
    {
        $getq = new model_admin();
        $kq = $getq->get_question_numbers($made, $loaicauhoi);
        return $kq;
    }

    function add_dethi($ten, $mota, $thoiluong, $socau, $ngayhethan, $nguoitao, $trangthai)
    {
        $add_dt = new model_admin();
        $kq = $add_dt->add_dethi($ten, $mota, $thoiluong, $socau, $ngayhethan, $nguoitao, $trangthai);
        if ($kq) return true;
        return false;
    }

    function get_dethi_by_id($made)
    {
        $dt = new model_admin();
        $kq = $dt->get_dethi_by_id($made);
        return $kq;
    }

    function action_edit_dethi_by_id($made, $tende, $mota, $ngayhethan, $trangthai)
    {
        $edit_de = new model_admin();
        $kq = $edit_de->action_edit_dethi_by_id($made, $tende, $mota, $ngayhethan, $trangthai);
        if ($kq)
            return true;
        return false;
    }

    function get_edit_question_by_id($macauhoi)
    {
        $get = new model_admin();
        $kq = $get->get_question_by_id($macauhoi);
        $info = $kq->fetch_assoc();
        $made = $info['MaDe'];
        $loaicauhoi = $info['LoaiCauHoi'];
        $noidung = $info['NoiDung'];
        $a = $info['A'];
        $b = $info['B'];
        $c = $info['C'];
        $d = $info['D'];
        $dapan = $info['DapAn'];
        $check_sub_question = $get->check_question_sub_available($macauhoi); //Kiểm tra xem có câu hỏi con hay không, nếu có trả về 'true' và ngược lại
        echo '
                <form method="POST" action="admin_actions.php">
                <table id="table-question-details" class="table table-hover">
                    <thead>
                        <tr><td colspan="2"><h3>CHI TIẾT CÂU HỎI MÃ SỐ ' . $macauhoi . '</h3></td></tr>
                    </thead>
                    <tbody>
                        <tr><td>Mã câu hỏi:</td><td><input type="text" class="form-control" readOnly="true" value="' . $macauhoi . '"></td></tr>
                        <tr><td>Mã đề:</td><td><input type="text" class="form-control" value="' . $made . '">
                        </td></tr>
                        <tr><td>Loại câu hỏi:</td><td>
                            <select id="edit_select_question_type" class="selectpicker form-control">
                            <option value="L-HINHANH" ' . ($loaicauhoi == 'L-HINHANH' ? "selected" : "") . '>PART 1 - LISTENING - HÌNH ẢNH</option>
                            <option value="L-HOITHOAI" ' . ($loaicauhoi == 'L-HOITHOAI' ? "selected" : "") . '>PART 2 - LISTENING - HỘI THOẠI</option>
                            <option value="L-HOIDAP" ' . ($loaicauhoi == 'L-HOIDAP' ? "selected" : "") . '>PART 3 - LISTENING - HỎI ĐÁP</option>
                            <option value="L-NOICHUYEN" ' . ($loaicauhoi == 'L-NOICHUYEN' ? "selected" : "") . '>PART 4 - LISTENING - BÀI NÓI CHUYỆN</option>
                            <option value="R-DIENCAU" ' . ($loaicauhoi == 'R-DIENCAU' ? "selected" : "") . '>PART 5 - READING - ĐIỀN CÂU</option>
                            <option value="R-DIENDOANVAN" ' . ($loaicauhoi == 'R-DIENDOANVAN' ? "selected" : "") . '>PART 6 - READING - ĐOẠN VĂN</option>
                            <option value="R-HOIDOANVAN" ' . ($loaicauhoi == 'R-HOIDOANVAN' ? "selected" : "") . '>PART 7 - READING - ĐỌC HIỂU</option>
                            </select>
                        </td></tr>
                        <tr><td>Nội dung:</td><td>
                            <textarea class="form-control" rows="5">' . $noidung . '</textarea>
                        </td><tr/>';
        if ($check_sub_question == true) {
            $sub_questions = $get->get_all_sub_question_by_question_id($macauhoi);
            echo '<tr><td>Tổng số câu hỏi nhỏ:</td><td><input type="text" class="form-control" value="' . $sub_questions->num_rows . '" readOnly="true"></td></tr>';
            $i = 1;
            while ($rows = $sub_questions->fetch_assoc()) {
                echo '
                            <tr><td>Câu hỏi nhỏ ' . $i . ':</td><td class="form-inline"><input type="text" class="form-control" style="width:70%;" value="' . $rows["NoiDungNho"] . '"> <button type="button" class="btn btn-info btn-fill edit" name="btn-submit-edit-sub-question" data-toggle="modal" data-target="#suacauhoi' . $rows['MaCauHoiNho'] . '" data-backdrop="false"><i class="fa fa-eye"></i>Xem câu hỏi ' . $i . '</button></td></tr>
                            
                            <div class="modal fade" id="suacauhoi' . $rows['MaCauHoiNho'] . '" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h4 class="modal-title">Mã câu hỏi ' . $rows['MaCauHoi'] . ' - Câu hỏi nhỏ số ' . $i . '</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST">
                                            <p>Câu hỏi: <input type="text" class="form-control" value="' . $rows['NoiDungNho'] . '"></p>
                                            <p>A: <input type="text" class="form-control" value="' . $rows["A"] . '"></p>
                                            <p>B: <input type="text" class="form-control" value="' . $rows["B"] . '"></p>
                                            <p>C: <input type="text" class="form-control" value="' . $rows["C"] . '"></p>
                                            <p>D: <input type="text" class="form-control" value="' . $rows["D"] . '"></p>
                                            <p>Đáp án: <input type="text" class="form-control" value="' . $rows["DapAn"] . '"></p>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                $i++;
            }
            echo '<tr><td colspan="2" class="text-center"><a href="index.php?p=themcauhoi&macauhoi=' . $macauhoi . '"><button type="button" class="btn btn-success btn-fill"><i class="fa fa-plus"></i>Thêm câu hỏi nhỏ</button></a></td></tr>';
        } else {
            echo '
                            <tr><td>A:</td><td><input type="text" class="form-control" value="' . $a . '"></td></tr>
                            <tr><td>B:</td><td><input type="text" class="form-control" value="' . $b . '"></td></tr>
                            <tr><td>C:</td><td><input type="text" class="form-control" value="' . $c . '"></td></tr>
                            <tr><td>D:</td><td><input type="text" class="form-control" value="' . $d . '"></td></tr>
                            <tr><td>Đáp án:</td><td><input type="text" class="form-control" value="' . $dapan . '"></td></tr>
                            <tr><td colspan="2" style="text-align:center;"><button type="submit" rel="tooltip" title="Submit changes" class="btn btn-info btn-fill edit" name="btn-submit-edit-question" id=""><i class="fa fa-edit"></i>Hoàn tất sửa</button></td></tr>
                            ';
        }
        echo '</tbody></table></form>';

    }

    function add_single_question($made, $noidung, $loaicauhoi, $nguoitao, $a, $b, $c, $d, $dapan)
    {
        $p = new model_admin();
        $kq = $p->add_single_question($made, $noidung, $loaicauhoi, $nguoitao, $a, $b, $c, $d, $dapan);
        if ($kq == true)
            return true;
        return false;
    }

    function print_news_table($param=0)
    {
        $ad = new model_admin();
        $kq = $ad->get_news($param);
        $table = '<table border="1">
                    <thead>
                    <th id="matintuc-tin">Mã Tin Tức</th>
                    <th id="tieude-tin">Tiêu Đề</th>
                    <th id="noidung-tin">Nội Dung</th>
                    <th id="tomtat-tin">Tóm Tắt</th>
                    <th id="anhminhhoa-tin">Ảnh Minh Họa</th>
                    <th id="nguoitao-tin">Người Tạo</th>
                    <th id="ngaytao-tin">Ngày Tạo</th>
                    <th id="ngaychinhsua-tin">Ngày Chỉnh Sửa</th>
                    <th id="ngonngu-tin">Ngôn Ngữ</th>
                    </thead>
                    <tbody>
            ';
        while ($row = $kq->fetch_array()) {
            $table=$table.'
                    <tr>
                        <td id="matintuc-tin">'.$row["MaTinTuc"].'</td>
                        <td id="tieude-tin">'.$row["TieuDe"].'</td>
                        <td id="noidung-tin"><div id="noidung-tins">'.$row["NoiDung"].'</div></td>
                        <td id="tomtat-tin">'.$row["TomTat"].'</td>
                        <td id="anhminhhoa-tin"><img src="'.$row["AnhMinhHoa"].'"></td>
                        <td id="nguoitao-tin">'.$row["NguoiTao"].'</td>
                        <td id="ngaytao-tin">'.$row["NgayTao"].'</td>
                        <td id="ngaychinhsua-tin">'.$row["NgayChinhSua"].'</td>
                        <td id="ngonngu-tin">'.$row["NgonNgu"].'</td>
                    </tr>
            ';
        }
        $table=$table."</tbody></table>";
        echo $table;
    } // end function print_news_table

    function add_news($tieuDe,$noiDung,$tomTat,$img,$ngonNgu){
        $con = new model_admin();
        $tieuDe=$this->con->escape_string(strip_tags(trim($tieuDe)));
        $noiDung=$this->con->escape_string(strip_tags(trim($noiDung)));
        $tomTat=$this->con->escape_string(strip_tags(trim($tomTat)));
        $img=$this->con->escape_string(strip_tags(trim($img)));
        $ngonNgu=$this->con->escape_string(strip_tags(trim($ngonNgu)));

        $thanhcong=true;
        if($tieuDe==null ||$noiDung==null ||$tomTat==null ||$img==null ||$ngonNgu==null){
            echo '<script>alert("Xin nhập đầy đủ thông tin")</script>';
            $thanhcong = false;
        }
        if($thanhcong){
            $kq=$con->add_new_news($tieuDe,$noiDung,$tomTat,$img,$_SESSION['login_id'],$ngonNgu);
            if(!$kq) {
                echo '<script>alert("Loi insert db")</script>';
                $thanhcong = false;
            }
        }

        return $thanhcong;
    } // end function add_news

    function users_statistic(){
        $con = new model_admin();
        $admin=$con->count_admin();
        $hocvien=$con->count_hocvien();
        $giaovien=$con->count_giaovien();
        $arr = array('0'=>$admin,'1'=>$giaovien,'2'=>$hocvien);
        return $arr;
    } // end function users_statistic

    function ds_duthi_statistic(){
        $con = new model_admin();
        $de1=$con->count_dsDuThi_De1();
        $de2=$con->count_dsDuThi_De2();
        $arr = array('0'=>$de1,'1'=>$de2);
        return $arr;
    } // end function ds_duthi_statistic

    function binhluan_statistic($made){
        $made=$this->con->escape_string(strip_tags(trim($made)));
        $con= new model_admin();
        $kq=$con->count_binhluan_MaDe($made);
        if($kq){
            return $kq;
        }
        return $this->con->error;
    }
}

?>