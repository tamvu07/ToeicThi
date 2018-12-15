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
                    <h4 class="title text-center">THÊM CÂU HỎI <?php echo $_GET['nhom'] ? 'NHÓM' : 'ĐƠN'; ?></h4>
                    <form method="POST" action="admin_actions.php">
                        <?php
                            //Nếu không phải câu hỏi nhóm thì hiện giao diện thêm câu hỏi đơn
                            if(!isset($_GET['nhom']))
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
                            else if(isset($_GET['nhom']) && !isset($_GET['subquestion']))
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
                                    <tr><td>Đoạn văn:</td><td><textarea style="resize:none;" rows="10" class="form-control" name="txtDoanVan"></textarea></td>
                                    <tr><td>Loại câu hỏi:</td><td>
                                            <select class="selectpicker form-control" name="select-type">
                                                <option value="R-DIENDOANVAN">Part 6 - Reading - Điền đoạn văn</option>
                                                <option value="R-HOIDOANVAN">Part 7 - Reading - Đọc hiểu đoạn văn</option>
                                            </select>
                                    </td></tr>
                                    <tr><td>Số câu hỏi nhỏ:</td><td>
                                            <select class="selectpicker form-control" name="select-sub-question-count">
                                                <option value="2">2 Câu</option>
                                                <option value="3">3 Câu</option>
                                                <option value="4">4 Câu</option>
                                                <option value="5">5 Câu</option>
                                            </select>
                                        </td></tr>
                                </table>
                                <p class="text-center"><button type="submit" class="btn btn-success btn-fill btn-wd" name="submit-add-parent-question" id="submit-add-parent-question">Lưu câu hỏi</button></p><br>
                        <?php
                            }
                            else if(isset($_GET['nhom']) && isset($_GET['subquestion']))
                            {
                                session_start();
                                $macauhoi = $_SESSION['MaCauHoi'];
                                $subquestionleft = $_SESSION['subQuestionCount'];
                        ?>
                                <table id="add-question-table" width="70%">
                                    <tr><td>Mã câu hỏi:</td><td><input type="text" class="form-control" name="txtMaCauHoi" readOnly="true" value="<?php echo $macauhoi; ?>"></td></tr>
                                    <tr><td>Số câu hỏi nhỏ còn lại:</td><td><input type="text" class="form-control" id="txtSubQuestionLeft" readonly="true" value="<?php echo $subquestionleft; ?>"></td></tr>
                                    <tr><td>Đoạn văn:</td><td>
                                            <?php
                                                $kq = $ad->get_fresh_question_by_id($macauhoi);
                                                $rows=$kq->fetch_assoc();
                                                echo $rows['NoiDung'];
                                            ?>
                                        </td></tr>
                                    <tr><td>Câu hỏi:</td><td><input type="text" class="form-control" name="txtNoiDungSub"></td></tr>
                                    <tr><td>A:</td><td><input type="text" class="form-control" name="subA"></td></tr>
                                    <tr><td>B:</td><td><input type="text" class="form-control" name="subB"></td></tr>
                                    <tr><td>C:</td><td><input type="text" class="form-control" name="subC"></td></tr>
                                    <tr><td>D:</td><td><input type="text" class="form-control" name="subD"></td></tr>
                                    <tr><td>Đáp án:</td><td><input type="text" class="form-control" name="subDapAn"></td></tr>
                                </table>
                                <p class="text-center"><button type="submit" class="btn btn-success btn-fill btn-wd" name="submit-add-child-question" id="submit-add-child-question">Lưu câu hỏi</button></p>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const subQuesLeft = document.getElementById("txtSubQuestionLeft");
    if(subQuesLeft.value==0)
    {
        alert('Đã thêm đủ!');
        document.location.href = 'index.php?p=cauhoi';
    }
</script>