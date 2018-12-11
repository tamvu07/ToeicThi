<?php
if(isset($_SESSION['login_id'])){
    $idUser=$_SESSION['login_id'];
}
else{
    echo '<script>alert("Bạn chưa đăng nhập");document.location="View/"</script>';

}
if(isset($_SESSION['ReadingScore'])&&isset($_SESSION['ListeningScore'])){
    $diemdoc=$_SESSION['ReadingScore'];
    $diemnghe=$_SESSION['ListeningScore'];
    $tongdiem=$diemdoc+$diemnghe;
}
else die('Không có điểm thi !!');
?>

<div id="container" style="padding-top:20px;">
    <div id="main-contain-test" class="col-md-6">
        <?php
            $toeic->Thong_tin_diem_thi_sau_khi_thi($diemnghe,$diemdoc,$tongdiem);
        ?>
    </div>
</div>

<link rel="stylesheet" href="css/Thanh-Style-testing.css"/>

<style>
    #thong-tin-diem{
        color:deepskyblue;
    }
    #thong-tin-diem a:hover{
        color: orangered;
    }
</style>