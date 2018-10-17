<?php
$kq = $toeic->lay_DeThi();
?>

<link href="css/Thanh-Style-examList.css" rel="stylesheet"/>

<div id="container" class="col-md-6">
    <p><a href="#">Trang chủ</a> / <a href="View/Exam"> Đề thi Toeic</a></p>
    <p><h1>ĐỀ THI THỬ TOEIC</h1></p>
    <?php while ($row = $kq->fetch_assoc()) {
        $dethi = str_replace(" ", "-", $row['TieuDe'])
        ?>
        <div id="items" class="col-md-12">
            <div id="item-info" class="col-md-9">
                <a href="View/Exam/<?= $dethi ?>" id="img"><img src="img/logo.dethi.jpeg" width="200" height="150"></a>
                <p><h4><a href="View/Exam/<?= $dethi ?>"><?= $row['TieuDe'] ?></a></h4></p>
                <p><?= $row['MoTa'] ?><br>Người học làm bài thi mô phỏng bài thi TOEIC thực tế.<br>
                <hr>
                </p>
                <span style="clear:both;">
                <i class="far fa-eye" title="lượt thi"></i>&nbsp;<?= $row['SoLanThi'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="far fa-comments"
                   title="bình luận"></i>&nbsp;<?php $kq1 = $toeic->lay_binhluan($row['MaDe'], 1, 5, $totalRows);
                    echo $totalRows ?>
            </span>
            </div>

            <?php
            //        if(isset($_SESSION['login_id']))
            //            echo "đã đăng nhập";
            //        else
            //            echo "chưa đăng nhập"
            //        ?>

            <div id="score" class="col-md-3">
                <table>
                    <tr style="border-bottom: 1px dotted lightgray">
                        <td colspan="2">Tổng điểm<br>0/990</td>
                    </tr>
                    <tr>
                        <td style="border-right: 1px dotted lightgray">Reading<br>0</td>
                        <td>Listening<br>0</td>
                    </tr>
                    <tr style="border-top: 1px dotted lightgray">
                        <td colspan="2">Bạn chưa làm bài thi này</td>
                    </tr>
                </table>
                <img src="img/Small-things-UI/to_bgarr_left.png">
            </div>
        </div>
    <?php } ?>
</div>