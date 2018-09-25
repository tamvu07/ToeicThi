<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">Danh sách người dùng</h4>
                                <div id="select-list-user"">
                                <select class="form-control form-control-lg" id="user_select_box">
                                    <option>Tất cả</option>
                                    <option>Quản trị viên</option>
                                    <option>Giảng viên</option>
                                    <option>Học viên</option>
                                </select></div></br>
                                <p class="category"><button type="button" class="btn btn-info"><i class="fa fa-plus"></i>Thêm người dùng</button></p>
                               
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th> 
                                    	<th>Họ tên</th>
                                    	<th>Giới tính</th>
                                    	<th>Email</th>
                                    	<th>Quyền</th>
                                        <th>Ngày tham gia</th>
                                        <th>Trạng thái</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once("../Controller/controller.php");
                                            $p = new Controller();
											$p->get_list_users();
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                            
                            <form class="form-inline active-pink-4">
                                <input class="form-control form-control-sm mr-3 w-75" type="text" aria-label="Search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <span>Tìm kiếm</span>
                        </form><br>
                   
                    
                </div>
            </div>
        </div>