<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">QUẢN LÝ ĐỀ THI</h4>
                    <form method="post">
                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="btn_add_user">
                            <span class="pe-7s-plus"> Thêm đề thi</span>
                        </button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain table-plain-bg">
                <div class="card-header text-center">
                    <h3 class="card-title"><strong>DANH SÁCH ĐỀ THI</strong></h3>
                    <p class="card-category">TOEIC</p>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <th>Mã đề</th>
                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Thời lượng</th>
                        <th>Số câu</th>
                        <th>ID người tạo</th>
                        <th>Ngày tạo</th>
                        <th>Số lần thi</th>
                        <th>Trạng thái</th>
                        </thead>
                        <tbody>
                        <?php
                            $ad->print_exam_table();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<link href="assets/css/admin-table.css" rel="stylesheet">
