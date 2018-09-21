<link rel="stylesheet" href="css/Thanh-Style.css"/>

<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $kq = $toeic->checkLogin($_POST['email'], $_POST['password']);
    if (!$kq) {
        echo "<script>alert('Chưa đăng nhập');</script>";
    } else {
        $row=$kq->fetch_assoc();
        echo "<script>alert('Đã đăng nhập: ".$row['IdUser']."');</script>";
    }
}
?>

<div id="container">
    <div id="background"></div>
    <div id="login-form" class="col-xl-3">
        <form method="post">
            <table width="100%">
                <tr>
                    <td height="200" colspan="3"><img src="img/layout/login-logo.jpg"
                                                      style="border-radius: 100px;margin: 40px 0px 10px 0px"></td>
                </tr>
                <tr>
                    <td colspan="3"><h1>ĐĂNG NHẬP</h1></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="email" name="email" id="email" placeholder="Email" autofocus><br><span
                                id="checkValidate"></span></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td style="padding-top:14px">
                        <input type="checkbox" value="remember-me" name="remember-me">
                        <label>Ghi nhớ đăng nhập ?</label>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-primary">Facebook</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger">Google+</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" height="100">
                        <button class="btn btn-success" type="submit">ĐĂNG NHẬP</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</div> <!-- /container -->

<style>
    #checkValidate {
        position: absolute;
        z-index: 2;
        height: 30px;
        width: 300px;
        border: 1px solid red;
        text-align: left;
        top: 348px;
        left: 90px;
        background-color: white;
    }
</style>

<script>
    $(document).ready(function () {
        $('#email').blur(function () {
            $.get(
                'View/checkValidate.php',
                "email=" + $('#email').val(),
                function(d){
                    $("#checkValidate").html(d)
                });
        });
    });
</script>
