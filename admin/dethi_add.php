<style>
    #add-dethi-table tr,td {
        padding:15px;
        font-weight:bold;
    }

    #add-dethi-table {
        border: lightblue solid 3px;
        border-collapse:separate;
        border-radius:20px;
        margin:10px;
    }
</style>
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">THÊM ĐỀ THI MỚI</h4>
                    <center>
                    <form method="POST" action="admin_actions.php">
                        <table id="add-dethi-table" width="50%">
                            <tr><td>Tên đề thi:</td><td><input type="text" class="form-control" name="txtTenDe" id="txtTenDe"></td></tr>
                            <tr><td>Mô tả:</td><td><textarea style="resize:none;" rows="5" class="form-control" name="txtMoTa"></textarea></td>
                            <tr><td>Thời lượng (phút):</td><td><input type="text" class="form-control" name="txtThoiLuong" value="120" readOnly="true"></td></tr>
                            <tr><td>Số câu:</td><td><input type="text" class="form-control" name="txtSoCau" value="200" readOnly="true"></td></tr>
                            <tr><td>Ngày hết hạn:</td><td><input type="datetime-local" class="form-control" name="txtngayHetHan"></td></tr>
                        </table>
                        <br><button type="submit" class="btn btn-success btn-fill btn-wd" name="submit-add-dethi" id="submit-add-dethi">
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