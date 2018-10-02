<link rel="stylesheet" href="css/Thanh-Style-testing.css"/>

<div id="container">
    <p>&nbsp;</p>
    <div id="main-contain" class="col-md-8">
        <!-- thi thu toeic -->
        <div id="test">
            <div id="heading">
                <p>Đề thi thử Toeic <?= $_GET['id'] ?></p>
            </div>
            <p>Chào mừng các bạn đến với đề thi thử TOEIC trong chương trình Luyện thi TOEIC online của Desus! Đây là
                bài
                thi mô phỏng dạng đề thi TOEIC thực tế do đội ngũ giáo viên của Desus kì công biên soạn. Bài làm của các
                bạn
                sẽ được chấm điểm và thông báo kết quả ngay sau khi các bạn nộp bài.</p>
            <p id="describe"><?php $kq = $toeic->lay_DeThi();
                $row = $kq->fetch_assoc();
                echo $row['MoTa'] . " - Số câu hỏi: " . $row['SoCau'] . " câu - Thời lượng: " . $row['ThoiLuong'] . " phút - Lượt thi: " . $row['SoLanThi']; ?></p>
            <p style="color:#ee4b53;text-align: center">Bạn hãy click vào nút Start bên dưới để bắt đầu làm bài. Chúc
                các
                bạn đạt điểm số thật cao!</p>
            <form style="text-align: center">
                <a href="#"><img src="img/green-start-button.png" width="150" height="150"></a>
            </form>
            <br>
        </div>          <!-- end thi thu toeic -->

        <!-- comment va danh muc -->
        <div id="feedback">
            <div id="comment" class="col-md-9">
                <p><h5>CÁC Ý KIẾN BÌNH LUẬN - PHẢN HỒI VỀ BÀI HỌC NÀY</h5></p>

                <div id="client-comment">
                    <table border="1">
                        <tr>
                            <td style="width: 15%;"><img src="img/logo.dethi.jpeg"></td>
                            <td style="width:30%">NICK NAME<BR>TRÌNH ĐỘ ANH VĂN<BR>NGÀY THAM GIA<BR>BÀI VIẾT</td>
                            <td style="width: 65%">TAO THẤY ĐỀ THI CHÁN QUÁ!!</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="category" class="col-md-3">
                <p><h6>DANH MỤC</h6></p>
                <ul style="list-style-type: disc">
                    <li>Đề thi thử Toeic 1</li>
                    <li>Đề thi thử Toeic 2</li>
                    <li>Đề thi thử Toeic 3</li>
                    <li>Đề thi thử Toeic 4</li>
                </ul>
            </div>
        </div>        <!-- end comment va danh muc -->

        <div style="clear: both"></div>
        <br>
    </div>
</div>