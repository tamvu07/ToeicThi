<?php
require_once "../Model/model.php";
$toeic = new model();

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
        header("location: ../View/Login.html");
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
/**
 * Created by PhpStorm.
 * User: TheWindMaker
 * Date: 9/30/2018
 * Time: 8:46 PM
 */
?>