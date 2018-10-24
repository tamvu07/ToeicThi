<link rel="stylesheet" href="css/Thanh-Style-testing.css"/>

<style>
img {
    opacity: 0.7;
}
img:hover {
    opacity: 1;
}
</style>

<?php
if (isset($_GET['id'])) $maDe = $_GET['id'];
if (isset($_GET['pageNum'])) $pageNum = $_GET['pageNum'];
settype($pageNum, 'int');
if ($pageNum < 0) $pageNum = 1;
$url = str_replace("/ToeicThi/", "", $_SERVER['REQUEST_URI']);
?>

<style>
    img {
        opacity: 0.7;
    }

    img:hover {
        opacity: 1;
    }
</style>

<div id="container">
    <div id="main-contain" class="col-md-8">
        <p>&nbsp;<a href="#">Trang chủ</a> / <a href="View/Exam"> Đề thi Toeic</a> / <a href="View/Exam/TOEIC-<?=$maDe?>">
                Toeic-<?=$maDe?></a></p>
        <!-- thi thu toeic -->
        <div id="test">
            <div id="heading">
                <p>Đề thi thử Toeic <?= $maDe ?></p>
            </div>
            <p style="padding: 0px 10px;">Chào mừng các bạn đến với đề thi thử TOEIC trong chương trình Luyện thi TOEIC online của Desus! Đây là
                bài
                thi mô phỏng dạng đề thi TOEIC thực tế do đội ngũ giáo viên của Desus kì công biên soạn. Bài làm của các
                bạn
                sẽ được chấm điểm và thông báo kết quả ngay sau khi các bạn nộp bài.</p>

            <p id="describe"><?php $kq = $toeic->lay_DeThi();
                $row = $kq->fetch_assoc();
                echo $row['MoTa'] . " - Số câu hỏi: " . $row['SoCau'] . " câu - Thời lượng: " . $row['ThoiLuong'] . " phút - Lượt thi: " . $row['SoLanThi']; ?></p>
            <p style="color:#ee4b53;text-align: center">Bạn hãy click vào nút Start bên dưới để bắt đầu làm bài. Chúc
                các bạn đạt điểm số thật cao!</p>
            <form style="text-align: center;" onsubmit="return false">

<!--                <a href="View/index.php?p=begin-test"><img src="img/green-start-button.png" width="150" height="150"></a>-->

                <a href="<?= $url ?>/Toeic-<?= $maDe ?>-testing-1.html"><img src="img/green-start-button.png" width="150" height="150"></a>

            </form>
            <br>
        </div>          <!-- end thi thu toeic -->

        <!-- comment va danh muc -->
        <div id="feedback">
            <!-- binh luan -->
            <div id="comment" class="col-md-10">
                <p><h5>CÁC Ý KIẾN BÌNH LUẬN - PHẢN HỒI VỀ BÀI THI NÀY</h5></p>
                <div id="client-comment">
                    <?php
                    $kqbl = $toeic->lay_binhluan($maDe, $pageNum, 3, $totalRows);
                    ?>
                    <table border="1">
                        <?php while ($rowbl = $kqbl->fetch_assoc()) { ?>
                            <?php
                            $kq = $toeic->lay_UserTheoId($rowbl['NguoiDang']);
                            $row = $kq->fetch_assoc();
                            ?>
                            <tr>
                                <td style="width: 15%;"><img src="img/logo.dethi.jpeg"></td>
                                <td style="width:25%">NICK NAME: <?= $row['Ho'] . " " . $row['Ten'] ?><BR>TRÌNH ĐỘ ANH
                                    VĂN: ..<BR>NGÀY ĐĂNG: <?= $rowbl['NgayDang'] ?><BR>BÀI VIẾT: ..
                                </td>
                                <td style="width: 60%"><?= $rowbl['NoiDung'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <?php
                            $kq = $toeic->lay_DeThi_TheoMaDe($maDe);
                            $rowdt = $kq->fetch_assoc();
                            $deThi = str_replace(" ", "-", $rowdt['TieuDe']);
                            $baseURL = "View/Exam/" . $deThi;
                            ?>
                            <td colspan="3"><?= $toeic->phan_Trang($baseURL, $pageNum, 3, $totalRows) ?></td>
                        </tr>
                    </table>

                    <div id="user-comment">
                        <strong>Ý KIẾN - BÌNH LUẬN CỦA BẠN</strong><br>
                        <form method="post" action="Controller/xulyBinhLuan.php">
                            <textarea name="comment"></textarea>
                            <input type="submit" value="Gửi bình luận" <?=(isset($_SESSION['login_id']))?"":"disabled"?> >
                        </form>
                    </div>
                </div>
            </div> <!-- end binh luan -->

            <!-- danh muc -->
            <div id="category" class="col-md-2">
                <p><h5>DANH MỤC</h5></p>
                <ul style="list-style-type: none">
                    <li id="tag">Các đề thi thử khác</li>
                    <li><a href="#">Đề thi thử Toeic 1</a></li>
                    <li><a href="#">Đề thi thử Toeic 2</a></li>
                    <li><a href="#">Đề thi thử Toeic 3</a></li>
                    <li><a href="#">Đề thi thử Toeic 4</a></li>
                </ul>
                <ul style="list-style-type: none">
                    <li id="tag">Các bài giảng khác</li>
                    <li><a href="#">Luyện nghe</a></li>
                    <li><a href="#">Luyện nói</a></li>
                    <li><a href="#">Luyện đọc</a></li>
                    <li><a href="#">Luyện viết</a></li>
                </ul>
            </div>  <!-- end danh muc -->
        </div>        <!-- end comment va danh muc -->

        <div style="clear: both"></div>
        <br>
    </div>
</div>

<!--<script language="JavaScript">-->
<!--    $(document).ready(function () {-->
<!--        var height=$("#user-comment").height();-->
<!--        var width=$("#user-comment").width();-->
<!--        $("#check-login-comment").height(height);-->
<!--        $("#check-login-comment").width(width);-->
<!--        $("#check-login-comment").html("BẠN CHƯA ĐĂNG NHẬP");-->
<!--    });-->
<!--</script>-->

