<style>
    #add-user-table tr,td {
        padding:15px;
        font-weight:bold;
    }

    #add-user-table {
        border: lightblue solid 3px;
        border-collapse:separate;
        border-radius:20px;
        margin:10px;
    }

    #email-result {
        border: 2px red solid;
        border-radius:5px;
        width:400px;
        font-weight:bold;
        padding:10px;
        background-color:#DE4949;
        color:white;
        display:none;
    }
</style>
<script type="text/javascript">
        $(document).ready(function() {
            var x_timer; 	
            $("#txtEmail").keyup(function (e){
                clearTimeout(x_timer);
                var email = $(this).val();
                x_timer = setTimeout(function(){
                    check_email_ajax(email);
                }, 1000);
            });	
        
        function check_email_ajax(email){
            $("#email-result").html('loading..');
            $.post('email-checker.php', {'txtEmail':email}, function(data) {
              $("#email-result").html(data);
            });
        }
        });
        </script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">THÊM NGƯỜI DÙNG MỚI</h4>
                    <center>
                    <form method="POST" action="admin_actions.php">
                        <table id="add-user-table" width="50%">
                            <tr><td>Email:</td><td><input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email.."></td></tr>
                            <tr><td>Mật khẩu:</td><td><input type="text" class="form-control" name="txtPassword" placeholder="Password.."></td></tr>
                            <tr><td>Họ:</td><td><input type="text" class="form-control" name="txtHo" placeholder="Last Name.."></td></tr>
                            <tr><td>Tên:</td><td><input type="text" class="form-control" name="txtTen" placeholder="First Name"></td></tr>
                            <tr><td>Quyền:</td><td>
                            <select name="role" class="form-control form-control-lg">
                                <option value="3">3 - Học Viên</option>
                                <option value="2">2 - Giáo Viên</option>
                                <option value="1">1 - Quản Trị Viên</option>
                            </select></td></tr>
                            <tr><td>Giới tính:</td><td>
                            <select name="gender" class="form-control form-control-lg">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select></td></tr>
                        </table>
                        <div id="email-result"></div>
                        <br><button type="submit" class="btn btn-success btn-fill btn-wd" name="submit-add-user" id="submit-add-user">
                        <i class="fa fa-save"></i>Hoàn tất<i class="fa fa-save"></i>
                    </button>
                    <br><br>
                    </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>