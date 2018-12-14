<?php
require_once "../Model/model.php";

class controller_main extends model
{
    function lay_UserTheoId($idUser)
    {
        $con = new model();
        $idUser = strip_tags(trim($idUser));
        $kq = $con->getUserById($idUser);
        if ($kq->num_rows > 0) return $kq;
        return $this->con->error;
    } // end function lay_UserTheoId

    function kiemtra_Login()
    {
        $con = new model();
        if (isset($_COOKIE['login_id'])) {
            $id = $_COOKIE['login_id'];
            $id = $this->con->escape_string(trim(strip_tags($id)));
            $kq = $con->getUserById($id);
            if ($kq->num_rows > 0) {
                $row = $kq->fetch_assoc();
                $this->xulyLogin($row['Mail'], $row['MatKhau']);
                setcookie('login_id', $row['IdUser'], time() + 2592000, "/");
            }
            return $this->con->error;
        }
    } // end function kiemtra_Login()

    function xulyLogin($email, $pass)
    {
        $con = new model();
        $email = $this->con->escape_string(trim(strip_tags($email)));
        $pass = $this->con->escape_string(trim(strip_tags($pass)));
        $kq = $con->login($email, $pass);
        if (!$kq) {
            echo "<script>
            $(document).ready(function () {
                $('#email').val('$email');
                $('#checkValidate').html('<strong>Sai email hoặc password !</strong>').show();
            });
        </script>";
        } else {
            $row = $kq->fetch_assoc();
            if ($row['KichHoat'] == 1) {
                $_SESSION['login_id'] = $row['IdUser'];
                $_SESSION['login_level'] = $row['Quyen'];
                $_SESSION['login_email'] = $row['Mail'];
                $_SESSION['login_lname'] = $row['Ho'];
                $_SESSION['login_fname'] = $row['Ten'];
                $_SESSION['avatar'] = $row['Avatar'];
                if (isset($_POST['remember'])) {
                    setcookie('login_id', $row['IdUser'], time() + 2592000, "/");
                }
                if (isset($_SESSION['back'])) {
                    $back = $_SESSION['back'];
                    unset($_SESSION['back']);
                    header("location: $back");
                }
            } else {
                echo "<script>
                $(document).ready(function () {
                    $('#email').val('$email');
                    $('#checkValidate').html('<strong>Tài khoản chưa được kích hoạt !</strong>').show();
                });
            </script>";
            }
        }
    } // end function xulyLogin

    function xulyRegister($lname, $fname, $email, $pass)
    {
        $con = new model();
        $fname = $this->con->escape_string(trim(strip_tags($fname)));
        $lname = $this->con->escape_string(trim(strip_tags($lname)));
        $email = $this->con->escape_string(trim(strip_tags($email)));
        $pass1 = $this->con->escape_string(trim(strip_tags($pass)));

        $pass = md5($pass1);

        return $con->register($lname, $fname, $email, $pass);


        /* $kq = $con->getUserByEmail($email);*/

        /*        if (!hash_equals($hash01, $hash02)) {
                    echo "<script>
                        $(document).ready(function () {
                            $('#email').val('$email');
                            $('#checkValidate').html('<strong>Hai mật khẩu chưa trùng nhau</strong>').show();
                        });
                    </script>";
                } elseif ($kq) {
                    echo "<script>
                        $(document).ready(function () {
                            $('#email').val('$email');
                            $('#checkValidate').html('<strong>Email này đã có người dùng</strong>').show();
                        });
                    </script>";
                }*/

        /*       if (hash_equals($hash01, $hash02) && !$kq) {
                   $kq = $con->register($lname, $fname, $email, $pass, $gender);
                   if ($kq) {
                       if (isset($_SESSION['back'])) {
                           $back = $_SESSION['back'];
                           unset($_SESSION['back']);
                           header("location: $back");
                       }
                   }
               }*/

    } // end function xulyRegister

    function lay_TinTuc($language)
    {
        $con = new model();
        $lang = strip_tags(trim($language));
        $kq = $con->getTinTuc($lang);
        if ($kq->num_rows > 0) return $kq;
        return $this->con->error;
    } // end function lay_TinTuc

    function lay_DeThi()
    {
        $con = new model();
        $kq = $con->layDeThi();
        if ($kq->num_rows > 0) return $kq;
        return $this->con->error();
    } // end function lay_DeThi

    function lay_DeThi_TheoMaDe($maDe)
    {
        $con = new model();
        $maDe = strip_tags(trim($maDe));
        $kq = $con->layDeThiTheoMaDe($maDe);
        if ($kq->num_rows > 0) return $kq;
        return $this->con->error;
    } // end function lay_DeThi_TheoMaDe

    function lay_binhluan($maDe, $pageNum, $pageSize, &$totalRows)
    {
        $con = new model();
        $startRow = ($pageNum - 1) * $pageSize;
        $kq = $con->layBinhLuan($maDe, $startRow, $pageSize);
        if (!$kq) return $this->con->error;

        $sql = "select count(*) from binhluan where MaDe=$maDe";
        $rows = $this->con->query($sql);
        if (!$rows) die($this->con->error);
        $rows_kq = $rows->fetch_row();
        $totalRows = $rows_kq[0];

        return $kq;
    } // end function lay_binhluan (co dung pageNum de phan trang)

    function phan_Trang($baseURL, $pageNum, $pageSize, $totalRows)
    {
        if ($totalRows <= 0) return "";
        $totalPages = ceil($totalRows / $pageSize);
        if ($totalPages <= 1) return "<ul class='pagination justify-content-center'><li class='page-item active'><a class='page-link' href='$baseURL/1'>1</a></li></ul>";
        $from = $pageNum - 3;
        $to = $pageNum + 3;
        if ($from <= 0) {
            $from = 1;
            $to = 3 * 2;
        }
        if ($to > $totalPages) {
            $to = $totalPages;
        }
        $links = "<ul class='pagination justify-content-center'>";
        for ($j = $from; $j <= $to; $j++) {
            if ($j == $pageNum) {
                $links = $links . "<li class='page-item active'><a class='page-link' href='$baseURL/$j'>$j</a></li>";
            } else {
                $links = $links . "<li class='page-item'><a class='page-link' href='$baseURL/$j'>$j</a></li>";
            }
        }
        $links = $links . "</ul>";
        return $links;
    } // end function phan_Trang

    function luu_BinhLuan($idUser, $maDe, $bl)
    {
        $con = new model();
        $bl = $this->con->real_escape_string(trim(strip_tags($bl)));
        $idUser = trim(strip_tags($idUser));
        $maDe = trim(strip_tags($maDe));
        $kq = $con->luuBinhLuan($idUser, $maDe, $bl);
        if ($kq) return true;
        else    return $this->con->error;
    }

    function lay_BaiLamTheoId($idUser)
    {
        $con = new model();
        $idUser = trim(strip_tags($idUser));
        $kq = $con->layBaiLamTheoId($idUser);
        if ($kq) return $kq;
        return false;
    }

    /*bat dau trang profile*/
    function upload_profile_all($txt_ho, $txt_ten, $txt_matkhau, $avatar, $gioitinh)
    {
        $con = new model();
        $kq = $con->upload_profile_database_all($txt_ho, $txt_ten, $txt_matkhau, $avatar, $gioitinh);
        return $kq;
    }

    function profile_display_all()
    {
        $con = new model();
        $kq = $con->profile_display_all_database();
        return $kq;
    }

    /*ket thuc trang profile*/

    /*bat dau kiem tra email co ton tai khong */
    function getUserByEmail($email)
    {
        $con = new model();
        $kq = $con->getUserByEmail($email);
        return $kq;
    }

    /*ket thuc kiem tra email co ton tai khong*/

    function check_Toeic_Register($idUser, $made)
    {
        $con = new model();
        $idUser = trim(strip_tags($idUser));
        $made = trim(strip_tags($made));
        $kq = $con->layDanhSachDuThi_Theo_IdUser($idUser);
        if (!$kq) return true;
        else {
            while ($row = $kq->fetch_array()) {
                if ($made == $row["MaDe"])
                    return false;
            }
        }
        return true;
    } // end function check_Toeic_Register()

    function dangki_DuThi($idUser, $made)
    {
        $con = new model();
        $idUser = trim(strip_tags($idUser));
        $made = trim(strip_tags($made));
        $kq = $con->dangki_DuThi($idUser, $made);
        if (!$kq) return false;
        return true;
    } // end function dangki_DuThi()

    function lay_DanhSach_DuThi()
    {
        $con = new Model();
        $kq = $con->getDanhSachDuThi();
        if (!$kq) die($this->con->error());
        return $kq;
    } // end function lay_DanhSach_DuThi()

    function thongtin_DangKiThi_ThanhCong($idUser, $made)
    {
        $idUser = trim(strip_tags($idUser));
        $made = trim(strip_tags($made));
        $kqUser = $this->lay_UserTheoId($idUser);
        $kqDeThi = $this->lay_DeThi_TheoMaDe($made);
        $kqDanhSach = $this->layDanhSachDuThi_Theo_IdUser($idUser);
        {
            $rowUser = $kqUser->fetch_array();
            $rowDeThi = $kqDeThi->fetch_array();
            $rowDanhSach = $kqDanhSach->fetch_array();
            $date = date_parse($rowDeThi['NgayHetHan']);
            $NgayThi = $date['day'];
            $ThangThi = $date['month'];
            $NamThi = $date['year'];
            $GioThi = $date['hour'];
            $PhutThi = $date['minute'];
            $GiayThi = $date['second'];
            $thi = date("d/m/Y H:i:s", mktime($GioThi, $PhutThi, $GiayThi, $ThangThi, $NgayThi, $NamThi));

            echo '<table class="table table-bordered">
            <thead>
            <tr>
                <th colspan="2" class="text-center">ĐỀ THI TOEIC ' . $made . '</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Đề thi:</td>
                <td>' . $rowDeThi["TieuDe"] . '</td>
            </tr>
            <tr>
                <td>Người dự thi:</td>
                <td>' . $rowUser["Ho"] . ' ' . $rowUser["Ten"] . '</td>
            </tr>
            <tr>
                <td>Mã dự thi:</td>
                <td>' . $rowDanhSach['STT'] . '</td>
            </tr>
            <tr>
                <td>Thời lượng:</td>
                <td>' . $rowDeThi["ThoiLuong"] . ' Phút</td>
            </tr>
            <tr>
                <td>Số câu hỏi:</td>
                <td>' . $rowDeThi["SoCau"] . ' câu</td>
            </tr>
            <tr>
                <td>Bắt đầu thi lúc:</td>
                <td>' . $thi . '</td>
            </tr>
            <tr>
                <td colspan="2"><h5 class="text-center">Lưu ý: Sau 5 phút từ lúc bắt đầu thi, hệ thống sẽ không cho dự thi nữa<br>yêu cầu thí sinh đăng nhập và làm bài thi theo thời gian quy định</h5></td>
            </tr>
            </tbody>
        </table>';
        }
    } // end function thongtin_DangKiThi_ThanhCong()

    function thongtin_LichThiToeic()
    {
        $con = new model();

        $dsDeThi = $this->lay_DeThi();

        if (!$dsDeThi) die('Không lấy được danh sách đề thi');
        else {
            while ($rowDS = $dsDeThi->fetch_array()) {
                $GLOBALS['diemDoc'] = 0;
                $GLOBALS['diemNghe'] = 0;
                $GLOBALS['tongDiem'] = $GLOBALS['diemDoc'] + $GLOBALS['diemNghe'];
                $announce = "Bạn chưa làm bài thi này";
                if (isset($_SESSION['login_id'])) {
                    $bailam = $con->layBaiLamTheoId($_SESSION['login_id']);
                    if ($bailam) {
                        while ($rowBL = $bailam->fetch_array()) {
                            if ($rowBL['MaDe'] == $rowDS['MaDe']) {
                                $doc = $rowBL['DiemDoc'];
                                $nghe = $rowBL['DiemNghe'];
                                $tong = $doc + $nghe;
                                if ($tong > $GLOBALS['tongDiem']) {
                                    $GLOBALS['diemDoc'] = $doc;
                                    $GLOBALS['diemNghe'] = $nghe;
                                    $GLOBALS['tongDiem'] = $tong;
                                }
                                $announce = "Số điểm cao nhất của bạn";
                            }
                        }
                    }
                }

                $date = date_parse($rowDS['NgayHetHan']);
                $NgayThi = $date['day'];
                $ThangThi = $date['month'];
                $NamThi = $date['year'];
                $GioThi = $date['hour'];
                $PhutThi = $date['minute'];
                $GiayThi = $date['second'];
                $thi = date("d/m/Y H:i:s", mktime($GioThi, $PhutThi, $GiayThi, $ThangThi, $NgayThi, $NamThi));

                $this->lay_binhluan($rowDS['MaDe'], 1, 5, $totalRows);
                $dethi = str_replace(" ", "-", $rowDS['TieuDe']);

                echo '
        <div id="items" class="col-md-12">
            <div id="item-info" class="col-md-9">
                <a href="View/Exam/' . $dethi . '/1" id="img"><img src="img/logo.dethi.jpeg" width="200"
                                                                  height="150"></a>
                <h4><a href="View/Exam/' . $dethi . '/1">Đề thi ' . $rowDS['TieuDe'] . '</a></h4>
                <p>' . $rowDS['MoTa'] . '<br>Người học làm bài thi bài thi TOEIC thực tế.</p>
                <strong><span>Ngày thi: ' . $thi . '</span></strong>
                <br>
                <span>
                    <i class="far fa-eye" title="lượt đăng kí"></i>&nbsp;' . $rowDS['LuotDangKi'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="far fa-comments"
                       title="bình luận"></i>&nbsp;' . $totalRows . '
                </span>
            </div>

            <div id="score" class="col-md-3">
                <table>
                    <tr style="border-bottom: 1px dotted lightgray">
                        <td colspan="2">Tổng
                            điểm<br>' . $GLOBALS["tongDiem"] . '
                            /990
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: 1px dotted lightgray">
                            Reading<br>' . $GLOBALS["diemDoc"] . '
                        </td>
                        <td>
                            Listening<br>' . $GLOBALS["diemNghe"] . '
                        </td>
                    </tr>
            
                    <tr style="border-top: 1px dotted lightgray">
                        <td colspan="2">' . $announce . '</td>
                    </tr>
                </table>
                <img src="img/Small-things-UI/to_bgarr_left.png">
            </div>
        </div> ';
                unset($GLOBALS['diemDoc']);
                unset($GLOBALS['diemNghe']);
                unset($GLOBALS['tongDiem']);
            }

        }
    } // end function thongtin_LichThiToeic

    function get_test_file($made)
    {
        $con = new Model();
        $made = trim(strip_tags($made));
        $kq = $con->lay_file_theoMaDe($made);
        if (!$kq) return $this->con->error;
        return $kq;
    } // end function get_test_file

    function lay_DanhSach_LoaiCauHoi()
    {
        $con = new Model();
        $kq = $con->layLoaiCauHoi();
        if (!$kq) return $this->con->error();
        return $kq;
    } // end function lay_DanhSach_LoaiCauHoi

    //Lấy về danh sách câu hỏi, câu trả lời và đáp án
    //In câu hỏi, 4 đáp án ABCD, dùng chung cho hầu hết các câu hỏi
    function lay_DanhSach_CauHoi($made)
    {
        $p = new Model();
        $num = 1;

        $part = $p->layLoaiCauHoi();
        $kqfile = $this->get_test_file($made);
        $file = $kqfile->fetch_array();
        if (!$file) die('không lấy được dữ liệu');

        $CH = $p->test_get_list_questions($made);
        if (!$CH) return false;
        else {
            // bat dau lay tung cau hoi trong bang cauhoi
            while ($rows = $CH->fetch_array()) {
                if ($num == 1) {
                    $rowP = $part->fetch_array();
                    echo '<br>' . '<div id="part">' . $rowP['MoTa'] . '</div>' . '<br>';
                }
                if ($num == 11) {
                    $rowP = $part->fetch_array();
                    echo '<br>' . '<div id="part">' . $rowP['MoTa'] . '</div>' . '<br>';
                }
                if ($num == 41) {
                    $rowP = $part->fetch_array();
                    echo '<br>' . '<div id="part">' . $rowP['MoTa'] . '</div>' . '<br>';
                }
                if ($num == 71) {
                    $rowP = $part->fetch_array();
                    echo '<br>' . '<div id="part">' . $rowP['MoTa'] . '</div>' . '<br>';
                }
                if ($num == 101) {
                    $rowP = $part->fetch_array();
                    echo '<br>' . '<div id="part">' . $rowP['MoTa'] . '</div>' . '<br>';
                }
                if ($num == 141) {
                    $rowP = $part->fetch_array();
                    echo '<br>' . '<div id="part">' . $rowP['MoTa'] . '</div>' . '<br>';
                }
                if ($num == 153) {
                    $rowP = $part->fetch_array();
                    echo '<br>' . '<div id="part">' . $rowP['MoTa'] . '</div>' . '<br>';
                }

                if ($rows['LoaiCauHoi'] != "R-DIENDOANVAN" && $rows['LoaiCauHoi'] != "R-HOIDOANVAN") {
                    $kqDA = $p->test_get_list_DapAn($rows['MaCauHoi']);
                    if ($kqDA) {
                        $rowDA = $kqDA->fetch_array();
                        $_SESSION['cau' . $num] = $rowDA['DapAn'];
                        if ($rowDA["A"] == null || $rowDA["B"] == null || $rowDA["C"] == null || $rowDA["D"] == null) {
                            $rowDA["A"] = 'A';
                            $rowDA["B"] = 'B';
                            $rowDA["C"] = 'C';
                            $rowDA["D"] = 'D';
                        }
                    } else die('Không thể lấy được Đáp án để chấm điểm');
                    if ($num < 11) {
                        $imgArr = explode(";", $file['HinhAnh'], 10);
                        $countImg = count($imgArr);
                        $imgArr[$countImg - 1] = str_replace(";", "", $imgArr[$countImg - 1]);
                        echo '
                        <div id="question">
                            Câu ' . $num . '. ' . $rows["NoiDung"] . '<br><img src="img/file/' . $imgArr[$num - 1] . '.jpg">
                        </div>
                        <div id="answer" style="margin-left:25px;">
                            <input id="' . $num . '-A" type="radio" name="' . $num . '" value="' . $rowDA["A"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-A"> A. ' . $rowDA["A"] . ' </label><br>
                            <input id="' . $num . '-B" type="radio" name="' . $num . '" value="' . $rowDA["B"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-B"> B. ' . $rowDA["B"] . ' </label><br>
                            <input id="' . $num . '-C" type="radio" name="' . $num . '" value="' . $rowDA["C"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-C"> C. ' . $rowDA["C"] . ' </label><br>
                            <input id="' . $num . '-D" type="radio" name="' . $num . '" value="' . $rowDA["D"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-D"> D. ' . $rowDA["D"] . ' </label><br>
                        </div><br>';
                    } else {
                        echo '
                        <div id="question">
                            Câu ' . $num . '. ' . $rows["NoiDung"] . '
                        </div>
                        <div id="answer" style="margin-left:25px;">
                            <input id="' . $num . '-A" type="radio" name="' . $num . '" value="' . $rowDA["A"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-A"> A. ' . $rowDA["A"] . ' </label><br>
                            <input id="' . $num . '-B" type="radio" name="' . $num . '" value="' . $rowDA["B"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-B"> B. ' . $rowDA["B"] . ' </label><br>
                            <input id="' . $num . '-C" type="radio" name="' . $num . '" value="' . $rowDA["C"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-C"> C. ' . $rowDA["C"] . ' </label><br>
                            <input id="' . $num . '-D" type="radio" name="' . $num . '" value="' . $rowDA["D"] . '"><label style="font-size:18px;padding-left:10px;margin-top:-6px" for="' . $num . '-D"> D. ' . $rowDA["D"] . ' </label><br>
                        </div><br>';
                    }

                    $num++;
                } else {
                    $kqSub = $p->test_get_list_sub_questions($rows['MaCauHoi'], $totalSub);
                    if (!$kqSub) die('Không lấy được câu hỏi');
                    else {
                        $count_sub = $num + $totalSub - 1;
                        echo '<br><h5>Questions ' . $num . '-' . $count_sub . ': refer to the following paragraphs</h5>' . '<br>' . $rows['NoiDung'] . '<br>';
                        while ($rowSub = $kqSub->fetch_array()) {
                            $kqDA = $p->test_get_list_DapAn($rows['MaCauHoi'], $rowSub['Id']);
                            if ($kqDA) {
                                $rowDA = $kqDA->fetch_array();
                                $_SESSION['cau' . $num] = $rowDA['DapAn'];
                            } else die('Không thể lấy được Đáp án để chấm điểm');
                            echo "
                                <div id='question'>
                                    Câu " . $num . ". " . $rowSub['NoiDung'] . "
                                </div>
                                <div id='answer' style='margin-left:25px;'><br>
                                    <input id='" . $num . "-A' type='radio' name='" . $num . "' value='" . $rowDA['A'] . "'><label style='font-size:18px;padding-left:10px;margin-top:-6px' for='" . $num . "-A'> A. " . $rowDA['A'] . " </label><br>
                                    <input id='" . $num . "-B' type='radio' name='" . $num . "' value='" . $rowDA['B'] . "'><label style='font-size:18px;padding-left:10px;margin-top:-6px' for='" . $num . "-B'> B. " . $rowDA['B'] . " </label><br>
                                    <input id='" . $num . "-C' type='radio' name='" . $num . "' value='" . $rowDA['C'] . "'><label style='font-size:18px;padding-left:10px;margin-top:-6px' for='" . $num . "-C'> C. " . $rowDA['C'] . " </label><br>
                                    <input id='" . $num . "-D' type='radio' name='" . $num . "' value='" . $rowDA['D'] . "'><label style='font-size:18px;padding-left:10px;margin-top:-6px' for='" . $num . "-D'> D. " . $rowDA['D'] . " </label><br>
                                </div><br>";
                            $num++;
                        }
                    }
                }
            } // end 1 cau hoi trong bang cauhoi
        }
    } // end function test_get_list_questions

    function tinh_diem_thi(){
        $markR=0;
        $markL=0;
        $diemReading=0;
        $diemListening=0;

        // Tính Điểm Listening
        for($i=1;$i<=100;$i++){
            if(isset($_POST[$i])){
                if(strcmp($_POST[$i],$_SESSION['cau'.$i])==0){
                    ++$markL;
                    if($markL <= 9) $diemListening=5;
                    else if($markL==25 || $markL==28 || $markL==39 || $markL==43 || $markL==47 || $markL==52 || $markL==55 || $markL==64 || $markL==89 || $markL==92 || $markL==94)
                        $diemListening+=10;
                    else if($markL>9 && $markL<=97)
                        $diemListening+=5;
                    else
                        $diemListening+=0;
                }
            }
        }

        // Tính điểm Reading
        for($i=101;$i<=200;$i++){
            if(isset($_POST[$i])){
                if(strcmp($_POST[$i],$_SESSION['cau'.$i])==0){
                    ++$markR;
                    if($markR <= 9) $diemReading=5;
                    else if($markR==25 || $markR==28 || $markR==39 || $markR==43 || $markR==47 || $markR==52 || $markR==55 || $markR==64 || $markR==89 || $markR==92 || $markR==94)
                        $diemReading+=10;
                    else if($markR>9 && $markR<=97)
                        $diemReading+=5;
                    else
                        $diemReading+=0;
                }
            }
        }

        $_SESSION['ReadingScore'] = $diemReading;
        $_SESSION['ListeningScore'] = $diemListening;
    } // end function tinh_diem_thi

    function test_save_scores($iduser,$made,$diemdoc,$diemnghe)
    {
        $p = new Model();
        $kq=$p->test_save_scores($iduser,$made,$diemdoc,$diemnghe);
        if($kq) return true;
        else return false;
    } // end function test_save_scores

    function Thong_tin_diem_thi_sau_khi_thi($diemnghe,$diemdoc,$tongdiem){
        if (isset($_SESSION['login_id'])) $iduser = $_SESSION['login_id'];
        else exit();
        $made = $_GET['id'];
        echo '
			<table id="score-table" cellpadding="10px">
				<tr><td colspan="2" class="t-head"><h2>Kết quả của ' . $_SESSION["login_lname"] . ' ' . $_SESSION["login_fname"] . ' sau khi hoàn thành đề TOEIC Số ' . $made . '</h2></td></tr>
				<tr><td>Điểm NGHE: ' . $diemnghe . '</></td><td>Điểm ĐỌC: ' . $diemdoc . '</td></tr>
				<tr><td colspan="2" class="t-sum">Tổng điểm: ' . $tongdiem . '</td></tr>
			</table>
		';
        $kq=$this->test_save_scores($iduser,$made,$diemdoc,$diemnghe);
        if($kq) echo "<br><h3 class='text-center'>Điểm của bạn đã được lưu</h3><br>";
        else echo "<br><h3 class='text-center'>Lỗi hệ thống. Không lưu được điểm số của bạn</h3><br>";
    } // end function Thong_tin_diem_thi_sau_khi_thi
}

?>
