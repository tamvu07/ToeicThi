<?php require_once "../Controller/controller_main.php";
$toeic = new controller_main();
$sorecord = $toeic->DanhDauKichHoatUser($_GET['id'], $_GET['rd']);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Kích hoạt tài khoản</title>
</head>
<body>
<div class="panel panel-default text-center text-uppercase" style="width:60%; margin:50px auto">
    <div class="panel-heading"><b>Kích hoạt tài khoản</b></div>
    <div class="panel-body">
        <?php if ($sorecord) { ?>
            <div class="alert alert-success">
                Đã kích hoạt xong tài khoản.<br/>
                Mời bạn <a href="Login.html"> nhắp vào đây</a> để đăng nhập
            </div>
        <?php } else { ?>
            <div class="alert alert-info">
                Bạn đã kích hoạt tài khoản rồi<br/>Không cần kích hoạt nữa<br/><br/>
                <a href="<?=BASE_URL?>View">Về trang chủ</a>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>