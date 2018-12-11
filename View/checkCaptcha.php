<?php
if(isset($_SESSION['login_id'])){
    $idUser=$_SESSION['login_id'];
}
else{
    echo '<script>alert("Bạn chưa đăng nhập");document.location="View/"</script>';

}
if (!isset($_SESSION['captcha_error'])) $_SESSION['captcha_error']=0;
else{
    if($_SESSION['captcha_error']>3){
        unset($_SESSION['captcha_error']);
        header("location: 1");
    }
}
    if (isset($_POST['submit'])) {
        if (isset($_POST['cap'])) {
            if (strcmp($_POST['cap'], $_SESSION['captcha_code']) == 0)
                header("location: Toeic-testing.html");
            else {
                $_SESSION['captcha_error']++;
                echo '<script>alert("Nhập sai captcha, xin mời nhập lại")</script>';
            }
        }
    }
echo $_SESSION['captcha_error'];
?>

<div class="container col-md-8" id="container">
    <div class="row">
        <h3>XIN MỜI NHẬP CAPTCHA</h3>
        <div id="captcha">
            <img src="View/captcha.php" vspace="5"/>
        </div>
        <form method="post">
            <p>Xin hãy nhập đúng kí tự (kể cả chữ hoa và chữ thường)</p>
            <p id="notice">Lưu ý: bạn chỉ được phép nhập sai 3 lần.</p>
            <input name="cap" autofocus>
            <input type="submit" value="Gửi" name="submit">
        </form>
    </div>
</div>

<style>
    #container {
        background-color: white;
        min-height: 500px;
    }

    h3 {
        text-align: center;
        margin: 20px auto;
    }

    #captcha {
        text-align: center;
        width: 100%;
    }

    #notice {
        text-align: center;
        color: #ff4c0e
    }

    form {
        margin: 20px auto;
    }
</style>