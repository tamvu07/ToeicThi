<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">QUẢN LÝ ĐỀ THI</h4>
                    <a href="?p=themdethi">
                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="btn_add_user">
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
                echo '<div class="question_statistics"><p>PART 1 - LISTENING - HÌNH ẢNH - '.$soCauHoiPart1.' CÂU';
                if($soCauHoiPart1==10) echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else echo '<i class="window-close"></i></p>';
                echo '<p>PART 2 - LISTENING - HỎI ĐÁP - '.$soCauHoiPart2.' CÂU';
                if($soCauHoiPart2==30) echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else echo '<i class="window-close"></i></p>';
                echo '<p>PART 3 - LISTENING - HỘI THOẠI - '.$soCauHoiPart3.' CÂU';
                if($soCauHoiPart3==30) echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else echo '<i class="window-close"></i></p>';
                echo '<p>PART 4 - LISTENING - NÓI CHUYỆN - '.$soCauHoiPart4.' CÂU';
                if($soCauHoiPart4==30)  echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else echo '<i class="window-close"></i></p>';
                echo '<p>PART 5 - READING - ĐIỀN CÂU - '.$soCauHoiPart5.' CÂU';
                if($soCauHoiPart5==40) echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else echo '<i class="window-close"></i></p>';
                echo '<p>PART 6 - READING - ĐIỀN ĐỌAN VĂN - '.$soCauHoiPart6.' CÂU';
                if($soCauHoiPart6==12) echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else echo '<i class="window-close"></i></p>';
                echo '<p>PART 7 - READING - HỎI ĐOẠN VĂN - '.$soCauHoiPart7.' CÂU';
                if($soCauHoiPart7==48) echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else echo '<i class="window-close"></i></p>';
                echo '<p>TỔNG SỐ CÂU HỎI - '.$tongCauHoi.' CÂU';
                if($tongCauHoi==200)
                    echo '<i class="fa fa-check" style="color:lightgreen;"></i></p>';
                else
                    echo '<i class="window-close"></i></p>';
                echo '</div>';
            }
            if(isset($_GET['removeihted']) && isset($_GET['dethi']))
            {
                
            }
            ?>
        </div>
    </div>

</div>
<link href="assets/css/admin-table.css" rel="stylesheet">
