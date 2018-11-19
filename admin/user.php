<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">QUẢN LÝ NGƯỜI DÙNG</h4>
                    <a href="?p=themnguoidung"><button type="button" class="btn btn-info btn-fill btn-wd">
                        <span class="pe-7s-plus"></span> Thêm người dùng
                    </button></a>
                    <div class="content table-responsive table-full-width">
                        <div id="select-list-user">
                            <form class="form-inline" method="post">
                                <span>Hiển thị danh sách</span>
                                <select name="select_role" class="form-control form-control-lg"
                                        id="user_select_box">
                                    <option value="0">Tất cả người dùng</option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '1') echo "selected=\"selected\""; ?>
                                            value="1">Quản trị viên
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '2') echo "selected=\"selected\""; ?>
                                            value="2">Giảng viên
                                    </option>
                                    <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '3') echo "selected=\"selected\""; ?>
                                            value="3">Học viên
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
                        if(isset($_GET['removeresu']))
                        {
                            $ad->delete_user_by_id($_GET['removeresu']);
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
                    <h3 class="card-title"><strong>DANH SÁCH NGƯỜI DÙNG</strong></h3>
                    <p class="card-category"><?=(!isset($_POST['select_role']))?'TẤT CẢ NGƯỜI DÙNG':(($_POST['select_role']==1)?'QUẢN TRỊ VIÊN':(($_POST['select_role']==2)?'GIẢNG VIÊN':(($_POST['select_role']==3)?'HỌC VIÊN':'TẤT CẢ NGƯỜI DÙNG')))?></p>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover">
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
                        <tbody>
                        <?php
                        if(isset($_POST['select_role'])) 
                            $param=$_POST['select_role'];
                        else 
                            $param=0;
                        $ad->print_users_table($param);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="assets/css/admin-table.css" rel="stylesheet">
