
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">QUẢN LÝ CÂU HỎI</h4>
                    <a href="?p=themdethi">
                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="btn_add_question">
                        <i class="fa fa-plus"></i> Thêm câu hỏi
                        </button>
                    </a><br>
                    <div class="content table-responsive table-full-width">
                        <div id="select-list-user">
                            <form class="form-inline" method="post">
                                <span>Loại câu hỏi</span>
                                <select name="select_part" class="form-control form-control-lg"
                                        id="user_select_box">
                                    <option value="0">Tất cả</option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '1') echo "selected=\"selected\""; ?>
                                            value="1">PART 1 - LISTENING - HÌNH ẢNH
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '2') echo "selected=\"selected\""; ?>
                                            value="2">PART 2 - LISTENING - HỘI THOẠI
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '3') echo "selected=\"selected\""; ?>
                                            value="3">PART 3 - LISTENING - HỎI ĐÁP
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '4') echo "selected=\"selected\""; ?>
                                            value="4">PART 4 - LISTENING - BÀI NÓI CHUYỆN
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '5') echo "selected=\"selected\""; ?>
                                            value="5">PART 5 - READING - ĐIỀN CÂU
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '6') echo "selected=\"selected\""; ?>
                                            value="6">PART 6 - READING - ĐOẠN VĂN
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '7') echo "selected=\"selected\""; ?>
                                            value="7">PART 7 - READING - ĐỌC HIỂU
                                    </option>
                                </select>
                                <button type="submit" name="btn_select_role" class="btn btn-warning btn-fill">Xác
                                    nhận
                                </button>
                            </form>
                            <?php
                                if(isset($_GET['edituser']))
                                {
                                    $ad->get_edit_user_by_id($_GET['edituser']);
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain table-plain-bg">
                <div class="card-header text-center">
                    <h3 class="card-title"><strong>DANH SÁCH CÂU HỎI</strong></h3>
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
                        <th>Hành động</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<link href="assets/css/admin-table.css" rel="stylesheet">
