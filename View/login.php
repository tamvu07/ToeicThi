<link rel="stylesheet" href="../css/Thanh-Style.css"/>

<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $kq = $toeic->login($email, $pass);
    if (!$kq) { ?>
        <script>
            $(document).ready(function () {
                $("#email").val("<?=$email?>");
                $("#checkValidate").html("<strong>Sai email hoặc password !</strong>").show();
            });
        </script>
        <?php
    } else {
        $row = $kq->fetch_assoc();
        if ($row['KichHoat'] == 1) {
            if (isset($_POST['remember'])) {
                $_SESSION['login_id'] = $row['IdUser'];
                $_SESSION['login_level'] = $row['Quyen'];
                $_SESSION['login_email'] = $row['Mail'];
                $_SESSION['login_name']=$row['HoTen'];
                $_SESSION['avatar']=$row['avatar'];
            }
            if(isset($_SESSION['back'])) {
                $back = $_SESSION['back'];
                unset($_SESSION['back']);
                header("location: $back");
            }
        } else { ?>
            <script>
                $(document).ready(function () {
                    $("#email").val("<?=$email?>");
                    $("#checkValidate").html("<strong>Tài khoản chưa được kích hoạt !</strong>").show();
                });
            </script>
            <?php
        }
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
                    <td colspan="3"><input type="text" name="email" id="email" placeholder="Email" autofocus><br>
                        <div id="checkValidate" class="alert alert-warning"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td style="padding-top:14px">
                        <input type="checkbox" value="remember" name="remember">
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
        text-align: left;
        top: 348px;
        left: 90px;
        line-height: 6px;
        color: red;
    }
</style>

<script>
    $("#checkValidate").hide();
    $(document).ready(function () {
        $('#email').blur(function () {
            $.get(
                'Control/checkValidate.php',
                "email=" + $('#email').val(),
                function (d) {
                    if (d != "")
                        $("#checkValidate").html(d).show();
                    else {
                        $("#checkValidate").html("");
                        $("#checkValidate").hide();
                    }
                });
        });
    });
    $(document).ready(function () {
        $("form").submit(function () {
            var text = $("#checkValidate").html();
            if (text != "") return false;
            return true;
        });
    });
</script>
