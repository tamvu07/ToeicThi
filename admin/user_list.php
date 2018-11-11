<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title text-center">QUẢN LÝ NGƯỜI DÙNG</h4>
                        <p class="category">
                        <form method="post">
                            <button type="submit" class="btn btn-info btn-fill btn-wd" name="btn_add_user">
                                <span class="pe-7s-plus"> Thêm người dùng</span>
                            </button>
                        </form>
                        </p>

                        <div class="content table-responsive table-full-width">
                            <?php
                            if (isset($_POST['btn_add_user']))
                            {
                                ?>
                                <form method="post" action="admin_actions.php">
                                    <center>
                                        <table width="50%">
                                            <tr>
                                                <td colspan="2">
                                                    <center>
                                                        <h4>Thêm người dùng mới<h4>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Họ tên:</td>
                                                <td><input class="form-control form-control-sm mr-3 w-75" type="text"
                                                           name="hoten" placeholder="Name"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Giới tính:</td>
                                                <td><select name="sex">
                                                        <option value="Nam">Nam</option>
                                                        <option value="Nữ">Nữ</option></td>
                                                </select><br></tr>
                                            <tr>
                                                <td>Mật khẩu:</td>
                                                <td><br><input class="form-control form-control-sm mr-3 w-75"
                                                               type="text" name="matkhau" placeholder="Password"><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quyền:</td>
                                                <td><select name="role">
                                                        <option value="3">3 - Học Viên</option>
                                                        <option value="2">2 - Giáo viên</option>
                                                        <option value="1">1 - Quản trị viên</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td><br><input class="form-control" type="text" name="email"
                                                               placeholder="Email"><br></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <center>
                                                        <button type="submit" class="btn btn-success btn-fill"
                                                                name="add-user"><span class="pe-7s-check"></span> Hoàn
                                                            tất! <span class="pe-7s-check"></span></button>
                                                </td>
                                            </tr>
                                    </center>
                                    </table></center></form>
                                <?php
                            }
                            else {
                            ?>
                            <div id="select-list-user"
                            ">
                            <form class="form-inline" method="post">
                                <span>Hiển thị danh sách</span>
                                <select name="select_role" class="form-control form-control-lg" id="user_select_box">
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
                                <button type="submit" name="btn_select_role" class="btn btn-warning btn-fill">Xác nhận
                                </button>
                            </form>
                        </div>

                        <?php
                        $p = new controller_admin();
                        if (isset($_POST['btn_select_role'])) {
                            if ($_POST['select_role'] == 0)
                                $p->get_list_users();
                            else if ($_POST['select_role'] == 1)
                                $p->get_list_admins();
                            else if ($_POST['select_role'] == 2)
                                $p->get_list_teachers();
                            else
                                $p->get_list_students();
                        }
                        ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <form class="form-inline active-pink-4">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search..">
            <i class="fa fa-search" aria-hidden="true"></i>
            <span>Tìm kiếm</span>
        </form>
        <br>


    </div>
</div>
</div>