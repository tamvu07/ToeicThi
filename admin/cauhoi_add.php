<style>
    #add-question-table tr,td {
        padding:15px;
        font-weight:bold;
    }

    #add-question-table {
        border: lightblue solid 3px;
        border-collapse:separate;
        border-radius:20px;
        margin:10px auto;
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
                    <h4 class="title text-center">THÊM CÂU HỎI MỚI</h4>
                    <form method="POST" action="admin_actions.php">
                        <?php
                            if(!isset($_GET['macauhoi']))
                            {
                        ?>
                        <table id="add-question-table" width="70%">
                            <tr><td>Mã đề:</td><td>
                                    <select class="selectpicker form-control" name="select-de" data-live-search="true">
                                        <?php
                                            $ad->print_exam_options_by_status(0);
                                        ?>
                                    </select>
                                </td></tr>
                            <tr><td>Nội dung:</td><td><textarea style="resize:none;" rows="5" class="form-control" name="txtNoiDung"></textarea></td>
                            <tr><td>Loại câu hỏi:</td><td>
                                    <select class="selectpicker form-control" name="select-type">
                                        <option value="L-HINHANH">Part 1 - Listening - Hình ảnh</option>
                                        <option value="L-HOIDAP">Part 2 - Listening - Hỏi đáp</option>
                                        <option value="L-HOITHOAI">Part 3 - Listening - Hội thoại</option>
                                        <option value="L-NOICHUYEN">Part 4 - Listening - Bài nói chuyện</option>
                                        <option value="R-DIENCAU">Part 5 - Reading - Điền câu</option>
                                    </select>
                                </td></tr>
                            <tr><td>A:</td><td><input type="text" class="form-control" name="singleA"></td></tr>
                            <tr><td>B:</td><td><input type="text" class="form-control" name="singleB"></td></tr>
                            <tr><td>C:</td><td><input type="text" class="form-control" name="singleC"></td></tr>
                            <tr><td>D:</td><td><input type="text" class="form-control" name="singleD"></td></tr>
                            <tr><td>Đáp án:</td><td><input type="text" class="form-control" name="singleDapAn"></td></tr>
                        </table>
                        <p class="text-center"><button type="submit" class="btn btn-success btn-fill btn-wd" name="submit-add-single-question" id="submit-add-single-question">Lưu câu hỏi</button></p><br>
                        <?php
                            }
                            else
                            {
                                echo 'Do something here';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>