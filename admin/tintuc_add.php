<style>
    #add-user-table tr, td {
        padding: 15px;
        font-weight: bold;
    }

    #add-user-table {
        border: lightblue solid 3px;
        border-collapse: separate;
        border-radius: 20px;
        margin: 10px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <center class="header">
                    <h4 class="title text-center">THÊM TIN TỨC MỚI</h4>
                    <center>
                        <form method="POST" action="admin_actions.php">
                            <table id="add-user-table" width="50%">
                                <tr>
                                    <td>Tiêu đề:</td>
                                    <td><input type="text" class="form-control" name="txtTieuDe" id="txtTieuDe"
                                               placeholder="Tiêu đề.." value="<?php if(isset($_POST['txtTieuDe'])) echo $_POST['txtTieuDe']; else echo "";?>"></td>
                                </tr>
                                <tr>
                                    <td>Nội dung:</td>
                                    <td><input type="text" class="form-control" name="txtNoiDung" id="txtNoiDung"
                                               placeholder="Nội dung.." value="<?php if(isset($_POST['txtNoiDung'])) echo $_POST['txtNoiDung']; else echo "";?>"></td>
                                </tr>
                                <tr>
                                    <td>Tóm tắt</td>
                                    <td><input type="text" class="form-control" name="txtTomTat" id="txtTomTat" placeholder="Tóm tắt.." value="<?php if(isset($_POST['txtTomTat'])) echo $_POST['txtTomTat']; else echo "";?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ảnh minh họa:</td>
                                    <td><input type="text" class="form-control" name="img" id="img" placeholder="Ảnh minh họa.." value="<?php if(isset($_POST['img'])) echo $_POST['img']; else echo "";?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ngôn ngữ</td>
                                    <td>
                                        <select name="role" class="form-control form-control-lg">
                                            <option value="1">tiếng Việt</option>
                                            <option value="2">tiếng Anh</option>
                                        </select></td>
                                </tr>
                            </table>
                            <br>
                            <button type="submit" class="btn btn-success btn-fill btn-wd" name="submit-add-tintuc"
                                    id="submit-add-tintuc">
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