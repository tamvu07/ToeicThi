<link rel="stylesheet" href="css/Thanh-Style-Login.css"/>

<?php
$loi = array();
$loi_str="";
if (isset($_POST['nut'])) {
    $thanhcong=$toeic->DangKyThanhVien($loi);
    if($thanhcong) echo '<script>alert("Đã đăng kí thành công. Bạn vui lòng kiểm tra email để kích hoạt tài khoản.")</script>';
    else{
        foreach ($loi as $s) {
            echo '<script>alert("' . $s . '")</script>';
        }
    }
}

?>

<div id="container" class="">
    <div id="background"></div>
    <div id="login-form" class="col-xl-3">
        <section class="alert alert-dark">
            <form method="post" action="">
                <table width="100%">
                    <tr>
                        <td height="200" colspan="3"><img src="img/layout/login-logo.jpg"
                                                          style="border-radius: 100px;margin: 40px 0px 10px 0px"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><h1>ĐĂNG KÝ</h1></td>
                    </tr>

                    <tr>
                        <td colspan="3"><input type="text" name="lastname" placeholder="Last name" value="<?=(isset($_POST['lastname']))?$_POST['lastname']:''?>" autofocus></td>
                    </tr>

                    <tr>
                        <td colspan="3"><input type="text" name="firstname" placeholder="First name" value="<?=(isset($_POST['firstname']))?$_POST['firstname']:''?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" name="email" id="email" placeholder="Email" value="<?=(isset($_POST['email']))?$_POST['email']:''?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="password" name="password" id="password" placeholder="Password">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="password" name="repassword" id="repassword" placeholder="Repassword">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" height="100">
                            <button class="btn btn-success" type="submit" name="nut" id="nut">ĐĂNG KÍ</button>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </div>

</div> <!-- /container -->
