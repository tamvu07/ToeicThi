
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">QUẢN LÝ ĐỀ THI</h4>
                    <a href="?p=themdethi">
                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="btn_add_dethi">
                        <i class="fa fa-plus"></i> Thêm đề thi
                        </button>
                    </a><br>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain table-plain-bg">
            <?php
            if(!isset($_GET['made']))
            {
            ?>
                <div class="card-header text-center">
                    <h3 class="card-title"><strong>DANH SÁCH ĐỀ THI</strong></h3>
                    <p class="card-category">TOEIC</p>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover">
                        <?php
                            echo '
                            <thead>
                            <th>Mã đề</th>
                            <th>Tiêu đề</th>
                            <th>Thời lượng</th>
                            <th>Số câu</th>
                            <th>ID người tạo</th>
                            <th>Ngày tạo</th>
                            <th>Ngày hết hạn</th>
                            <th>Lượt đăng kí</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                            </thead>
                            <tbody>
                            ';
                            $ad->print_exam_table();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
            }
            else
            {
                $made = $_GET['made'];
                $soCauHoiPart1 = $ad->get_question_numbers($made,'L-HINHANH');
                $soCauHoiPart2 = $ad->get_question_numbers($made,'L-HOIDAP');
                $soCauHoiPart3 = $ad->get_question_numbers($made,'L-HOITHOAI');
                $soCauHoiPart4 = $ad->get_question_numbers($made,'L-NOICHUYEN');
                $soCauHoiPart5 = $ad->get_question_numbers($made,'R-DIENCAU');
                $soCauHoiPart6 = $ad->get_question_numbers($made,'R-DIENDOANVAN');
                $soCauHoiPart7 = $ad->get_question_numbers($made,'R-HOIDOANVAN');
                $tongCauHoi = $soCauHoiPart1+$soCauHoiPart2+$soCauHoiPart3+$soCauHoiPart4+$soCauHoiPart5+$soCauHoiPart6+$soCauHoiPart7;
                echo '<h3 style="text-align:center; font-weight:bold;color:red;">MÃ ĐỀ '.$made.'</h3>';
                echo '<table id="edit-dethi-tb">
                <thead><td>THỐNG KÊ</td><td>THÔNG TIN</td></thead>';

                echo '<tr><td><form method="POST" action="admin_actions.php">
                PART 1 - LISTENING - HÌNH ẢNH - <b>'.$soCauHoiPart1.' CÂU</b>';
                if($soCauHoiPart1==10) echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$soCauHoiPart1.'" max="10"></progress>';

                echo 'PART 2 - LISTENING - HỘI THOẠI - <b>'.$soCauHoiPart2.' CÂU</b>';
                if($soCauHoiPart2==30) echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$soCauHoiPart2.'" max="10"></progress>';

                echo 'PART 3 - LISTENING - HỎI ĐÁP - <b>'.$soCauHoiPart3.' CÂU</b>';
                if($soCauHoiPart3==30) echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$soCauHoiPart3.'" max="10"></progress>';

                echo 'PART 4 - LISTENING - BÀI NÓI CHUYỆN - <b>'.$soCauHoiPart4.' CÂU</b>';
                if($soCauHoiPart4==30) echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$soCauHoiPart4.'" max="10"></progress>';

                echo 'PART 5 - READING - ĐIỀN CÂU - <b>'.$soCauHoiPart5.' CÂU</b>';
                if($soCauHoiPart5==40) echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$soCauHoiPart5.'" max="10"></progress>';

                echo 'PART 6 - READING - ĐOẠN VĂN - <b>'.$soCauHoiPart6.' CÂU</b>';
                if($soCauHoiPart6==12) echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$soCauHoiPart6.'" max="10"></progress>';

                echo 'PART 7 - READING - ĐỌC HIỂU - <b>'.$soCauHoiPart7.' CÂU</b>';
                if($soCauHoiPart7==48) echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$soCauHoiPart7.'" max="10"></progress>';
                
                echo 'TỔNG SỐ CÂU HỎI - <b>'.$tongCauHoi.' CÂU</b>';
                if($tongCauHoi==200)
                    echo '<i class="fa fa-check" style="color:lightgreen;"></i>';
                else
                    echo '<i class="fa fa-close" style="color:red;"></i>';
                echo '<br><progress value="'.$tongCauHoi.'" max="200"></progress>';
                $thongTinDeThi = $ad->get_dethi_by_id($made);
                $chitiet = $thongTinDeThi->fetch_assoc();
                echo '</td><td>
                Mã đề:<input type="text" class="form-control" name="txtMa" placeholder="Mã đề.." value="'.$chitiet['MaDe'].'" readOnly="true"><br>
                Tên đề:<input type="text" class="form-control" name="txtTen" placeholder="Tên đề.." value="'.$chitiet['TieuDe'].'"><br>
                Mô tả:<textarea style="resize:none;width:100%;" rows="5" class="form-control" name="txtMoTa" id="txtMoTa">'.$chitiet['MoTa'].'</textarea><br>
                Ngày hết hạn:<input type="datetime-local" class="form-control" name="txtNgayHH" placeholder="Ngày hết hạn.." value="'.$chitiet['NgayHetHan'].'"><br>
                Trạng thái:<select class="form-control" name="TrangThaiDe">
                    <option value="1" '.($chitiet['TrangThai']==1 ? "selected" : "").'>MỞ</option>
                    <option value="0" '.($chitiet['TrangThai']==0 ? "selected" : "").'>ĐÓNG</option>
                </select><br>
                <button type="submit" class="btn btn-success btn-fill btn-wd" style="display:block; margin:auto;" name="submit-edit-dethi"><i class="fa fa-save"></i>CẬP NHẬT ĐỀ THI</button></form>
                </td></tr></table>';
            }
            // if(!isset($_POST['btn-dethi-details']) && isset($_GET['made']))
            // {
            //     echo '<form method="POST"><button type="submit" id="btn-dethi-details" name="btn-dethi-details" class="btn btn-success btn-fill"><i class="fa fa-book"></i> Xem chi tiết đề thi</button></form>';
            // }
            // else
            // {
            //     echo 'do something here';
            // }
            ?>
        </div>
    </div>

</div>
<link href="assets/css/admin-table.css" rel="stylesheet">
