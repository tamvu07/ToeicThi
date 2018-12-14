<?php
if(isset($_GET['made'])) $made=$_GET['made'];
if(isset($_SESSION['login_id'])) $idUser=$_SESSION['login_id'];
else{
    echo '<script>alert("Bạn chưa đăng nhập");document.location="View/"</script>';

}
$kq=$toeic->check_Toeic_Register($_SESSION['login_id'],$made);
if(!$kq) echo '<script>alert("Bạn đã đăng kí đề thi này rồi")</script>';
else {
    $kq=$toeic->dangki_DuThi($idUser,$made);
    if(!$kq) die('Không đăng kí thi được');
}
?>

<div class="container">
    <div id="wraper">
        <h2>BẠN ĐÃ ĐĂNG KÍ THÀNH CÔNG</h2>
        <p><a href="<?= BASE_URL ?>View/Exam">Xem lịch thi khác</a>||<a href="<?= BASE_URL ?>">Trang chủ</a></p>
        <?php $toeic->thongtin_DangKiThi_ThanhCong($idUser,$made) ?>
    </div>
</div>

<link href="css/Thanh-Style-toeic-register.css" rel="stylesheet"/>
