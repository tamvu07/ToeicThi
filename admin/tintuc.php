<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title text-center">QUẢN LÝ TIN TỨC</h4>
                <a href="?p=themtintuc">
                    <button type="button" class="btn btn-info btn-fill btn-wd">
                        <i class="fa fa-plus"></i> Thêm tin
                    </button>
                </a>
                <div class="content table-responsive table-full-width">
                    <div id="select-list-user">
                        <form class="form-inline" method="post">
                            <span>Hiển thị danh sách</span>
                            <select name="select_role" class="selectpicker" data-live-search="false"
                                    id="user_select_box">
                                <option value="0">Tất cả tin</option>
                                <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '1') echo "selected=\"selected\""; ?>
                                        value="1">tin tiếng Việt
                                </option>
                                <option <?php if (isset($_POST['select_role']) && $_POST['select_role'] == '2') echo "selected=\"selected\""; ?>
                                        value="2">tin tiếng Anh
                                </option>
                            </select>
                            <button type="submit" name="btn_select_role" class="btn btn-warning btn-fill">Xác
                                nhận
                            </button>
                        </form>
                        <?php
                        if (isset($_GET['edituser'])) {
                            $ad->get_edit_user_by_id($_GET['edituser']);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card card-plain table-plain-bg">
        <div class="card-header">
            <h3 class="card-title text-center"><strong>DANH SÁCH TIN TỨC</strong></h3>
            <p class="card-category text-center"><?= (!isset($_POST['select_role'])) ? 'TẤT CẢ TIN' : (($_POST['select_role'] == 1) ? 'TIN TIẾNG VIỆT' : (($_POST['select_role'] == 2) ? 'TIN TIẾNG ANH' : 'TẤT CẢ TIN')) ?></p>
        </div>
    </div>
    <span id="abc"></span>
    <div id="news-table">
        <?php
        if (!isset($_POST['select_role'])) $param = 0;
        else $param = $_POST['select_role'];
        $ad->print_news_table($param);
        ?>
    </div>
</div>

<link href="assets/css/Thanh-Style-admin-tintuc.css" rel="stylesheet">