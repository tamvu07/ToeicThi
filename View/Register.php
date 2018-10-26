<link rel="stylesheet" href="css/Thanh-Style-Login.css"/>

<?php
if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword'])&&isset($_POST['gender'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $repass=$_POST['repassword'];
    $gender=$_POST['gender'];

    $kq=$toeic->xulyRegister($lname,$fname,$email,$pass,$repass,$gender);
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
                        <td colspan="3"><input type="text" name="lastname" placeholder="Last name" value="<?=(isset($_POST['lastname']))?$_POST['lastname']:""?>" autofocus></td>
                    </tr>

                    <tr>
                        <td colspan="3"><input type="text" name="firstname" placeholder="First name" value="<?=(isset($_POST['firstname']))?$_POST['firstname']:""?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><div id="gender"><span>Giới tính</span><input type="radio" name="gender" value="Nam" checked id="nam"> Nam<input id="nu" type="radio" name="gender" value="Nữ"> Nữ</div></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" name="email" id="email" placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="password" name="password" id="password" placeholder="Password">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="password" name="repassword" id="repassword" placeholder="Repassword">
                            <div id="checkValidate" class="alert alert-warning"></div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" height="100">
                            <button class="btn btn-success" type="submit">ĐĂNG KÍ</button>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </div>

</div> <!-- /container -->

<style>
    #gender{
        text-align: left;
        height:32px;
        width:76%;
        margin-left:45px;
        margin-top:-15px;
        padding: 0px 30px;
    }
    #gender #nam{
        margin-left:10%;
    }
    #gender #nu{
       margin-left:15%;
    }

    #gender span{
        padding:5px 10px;
        background-color: #505050;
        color:white;
        border-radius: 15px;
        width:100px;
        letter-spacing: 1px;
    }

    #checkValidate {
        height: 30px;
        width: 300px;
        border: 1px solid red;
        position: absolute;
        top: 690px;
        left: 70px;
        padding-top:4px;
        color:red;
    }
</style>

<script>
    $("#checkValidate").hide();
    $(document).ready(function () {
        $('#email').blur(function () {
            $.get(
                'Controller/checkValidate.php',
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
