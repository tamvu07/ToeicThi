<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">QUẢN LÝ CÂU HỎI</h4>
                    <a href="?p=themcauhoi">
                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="btn_add_question">
                        <i class="fa fa-plus"></i> Thêm câu hỏi
                        </button>
                    </a><br>
                    <div class="content table-responsive table-full-width">
                        <div id="select-list-question">
                            <form class="form-inline" method="post">
                                <span>Lọc theo ĐỀ THI</span>
                                <select class="selectpicker" name="select_part" id="select_part" data-live-search="false">
                                <option value="TATCA">Tất cả câu hỏi</option>
                                    <option <?php if (isset($_POST['select_part']) && $_POST['select_part'] == 'L-HINHANH') echo "selected"; ?>
                                            value="L-HINHANH">PART 1 - LISTENING - HÌNH ẢNH
                                    </option>
                                    <option <?php if (isset($_POST['select_part']) && $_POST['select_part'] == 'L-HOITHOAI') echo "selected"; ?>
                                            value="L-HOITHOAI">PART 2 - LISTENING - HỘI THOẠI
                                    </option>
                                    <option <?php if (isset($_POST['select_part']) && $_POST['select_part'] == 'L-HOIDAP') echo "selected"; ?>
                                            value="L-HOIDAP">PART 3 - LISTENING - HỎI ĐÁP
                                    </option>
                                    <option <?php if (isset($_POST['select_part']) && $_POST['select_part'] == 'L-NOICHUYEN') echo "selected"; ?>
                                            value="L-NOICHUYEN">PART 4 - LISTENING - BÀI NÓI CHUYỆN
                                    </option>
                                    <option <?php if (isset($_POST['select_part']) && $_POST['select_part'] == 'R-DIENCAU') echo "selected"; ?>
                                            value="R-DIENCAU">PART 5 - READING - ĐIỀN CÂU
                                    </option>
                                    <option <?php if (isset($_POST['select_part']) && $_POST['select_part'] == 'R-DIENDOANVAN') echo "selected"; ?>
                                            value="R-DIENDOANVAN">PART 6 - READING - ĐOẠN VĂN
                                    </option>
                                    <option <?php if (isset($_POST['select_part']) && $_POST['select_part'] == 'R-HOIDOANVAN') echo "selected"; ?>
                                            value="R-HOIDOANVAN">PART 7 - READING - ĐỌC HIỂU
                                    </option>
                                </select>

                                <select class="selectpicker" name="select_de" id="select_de" data-live-search="true">
                                    <?php
                                        $ad->print_exam_options();
                                    ?>
                                </select>
                                <button type="submit" name="btn_select" id="btn_select" class="btn btn-warning btn-fill">Xác
                                    nhận
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain table-plain-bg">
                <?php
                    if(!isset($_GET['macauhoi']))
                    {
                ?>
                <div class="card-header text-center">
                    <h3 class="card-title"><strong>DANH SÁCH CÂU HỎI<?php if(isset($_POST['select_de']) && isset($_POST['select_part'])) echo ' ⬤ Đề '.$_POST['select_de'].' ⬤ '.$_POST['select_part'] ?></strong></h3>
                    <p class="card-category">TOEIC</p>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>Mã câu hỏi</th>
                            <th>Mã đề</th>
                            <th>Loại câu hỏi</th>
                            <th>Nội dung</th>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                            <th>Đáp Án</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_POST['btn_select']))
                                {
                                    $loaicauhoi = $_POST['select_part'];
                                    $made = $_POST['select_de'];
                                }
                                else
                                {
                                    $loaicauhoi = 'TATCA';
                                    $made = '1';
                                }
                                $ad->print_question_table($loaicauhoi,$made);
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                    }
                    else
                    {
                        $macauhoi = $_GET['macauhoi'];
                        $ad->get_edit_question_by_id($macauhoi);
                    }
                ?>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<link href="assets/css/admin-table.css" rel="stylesheet">
