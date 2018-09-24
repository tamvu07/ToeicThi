
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
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include("connect.php");
                                            $sql = "SELECT * FROM nguoidung";
                                            $result = mysql_query($sql);
                                            if(mysql_num_rows($result) > 0)
                                            {
                                                $i = 1;
                                                while($row = mysql_fetch_assoc($result))
                                                {
                                                    echo '<tr><td>'.$IdUser.'</td><td>'.$row["HoTen"].'</td><td>'.$row["HoTen"].'</td><td>'.$row["HoTen"].'</td><td>'.$row["HoTen"].'</td><td class="td-actions">
                                                    <a href="index.php?u=edit?uid='.$row["HoTen"].'"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button></a>
                                                    <a href="index.php?u=remove?uid='.$row["HoTen"].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button></a>
                                                </td></tr>';

                                                    $i++;
                                                }
                                            }
                                            else
                                            {
                                                echo '<tr><td>No record</td><td>No record</td><td>No record</td><td>No record</td><td>No record</td></tr>';
                                            }
                                            mysql_close();
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