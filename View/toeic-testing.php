<?php
require_once "../Controller/controller_main.php";
$p = new controller_main();
if (isset($_GET['id'])) $made = trim(strip_tags($_GET['id']));
$kq = $p->get_test_file($made);
$file = $kq->fetch_array();

if(isset($_SESSION['login_id'])){
    $idUser=$_SESSION['login_id'];
}
else{
    echo '<script>alert("Bạn chưa đăng nhập");document.location="View/"</script>';

}

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

        <audio id="myAudio">
            <source src="<?=$file['Mp3']?>" type="audio/mpeg">
        </audio>

        <button onclick="playAudio()" type="button" id="listen-btn" >LISTENING</button>

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

<script src="js/Thanh-toeic-testing.js"></script>







