<?php
require_once "../Controller/controller_main.php";
$p = new controller_main();
if (isset($_GET['id'])) $made = trim(strip_tags($_GET['id']));
$kq = $p->get_test_file($made);
$file = $kq->fetch_array();

if(isset($_POST['submit-test'])){
    $p->tinh_diem_thi();
    header("location: XemDiem.html");
}

?>

<div id="container-test">
    <div id="test-title" class="col-md-8">
        <h1>ĐỀ THI TOEIC SỐ <span id="made"><?= $made ?></span></h1>
        <div id="countdown-timer"><span id="m" name="m">120</span>:<span id="s" name="s">00</span></div>
    </div>

    <div id="mp3-player" class="col-md-8">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="100" id="flashContent">
            <param name="movie" value="TOEIC-upload/swf/mp3_test.swf"/>
            <param name="flashvars"
                   value="mp3url=<?= $file['Mp3'] ?>&amp;timesToPlay=2&amp;showPlay=true&amp;waitToPlay=true&amp;showID3=true&amp;addHttp=false"/>
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="TOEIC-upload/swf/mp3_test.swf" width="600"
                    height="33">
                <param name="flashvars"
                       value="mp3url=<?= $file['Mp3'] ?>&amp;timesToPlay=2&amp;showPlay=true&amp;waitToPlay=true&amp;showID3=true&amp;addHttp=false"/>
                <!--<![endif]-->
                <a href="http://www.adobe.com/go/getflashplayer">
                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"
                         alt="Get Adobe Flash player"/>
                </a>
                <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
        </object>
    </div>

    <div id="main-contain-test" class="col-md-8">
        <form method="post">
            <?php $p->lay_DanhSach_CauHoi($made); // in ra câu hỏi và trắc nghiệm ?>
            <button type="submit" id="submit-test" name="submit-test"></button>
        </form>
    </div>

    <div class="col-md-8" id="button-duoi-cung">
        <button id="test-bottom" class="col-md-12" onclick="submiteTest()">Nộp bài thi</button>
    </div>

</div>

<link rel="stylesheet" href="css/Thanh-Style-testing.css"/>
<link rel="stylesheet" href="css/Thanh-Style-toeic-testing.css"/>

<!-- Javascript đếm giờ cho bài làm -->
<script>
    var m = 120;
    var s = 0;
    var timeout = null;
    window.onload = start(); //khi page vừa được load thì bộ đếm sẽ chạy ngay lập tức

    //lấy số thời gian còn lại trong localStorage của trình duyệt
    if (localStorage.getItem("minutes-left")) {
        var m = localStorage.getItem("minutes-left");
        var s = localStorage.getItem("seconds-left");
    }

    function submiteTest() {
        if (confirm("Bạn có chắc chắn muốn nộp bài để kết thúc phần dự thi?")) {
            $(document).ready(function () {
                $("#submit-test").click();
            })
            localStorage.clear();
        }
        else
            return 0;
    }

    //Lưu thời gian còn lại vào localStorage
    function saveCurrentTimer() {
        var mm = document.getElementById("m").innerHTML;
        var ss = document.getElementById("s").innerHTML;
        localStorage.setItem("minutes-left", mm);
        localStorage.setItem("seconds-left", ss);
    }

    //Bắt đầu thực hiện hành động đếm giờ
    function start() {
        if (s == -1) {
            m = m - 1;
            s = 59;
        }
        if (m == -1) {
            clearTimeout(timeout);
            alert('hết giờ, hệ thống dã tự động nộp bài');
            submiteTest();
        }
        if (m < 10)
            document.getElementById('m').innerText = '0' + m.toString();
        else
            document.getElementById('m').innerText = m.toString();
        if (s < 10)
            document.getElementById('s').innerText = '0' + s.toString();
        else
            document.getElementById('s').innerText = s.toString();
        timeout = setTimeout(function () {
            s--;
            start();
        }, 1000);
    }
</script>







