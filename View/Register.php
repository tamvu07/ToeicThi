<link rel="stylesheet" href="css/Thanh-Style-Login.css"/>

<?php

$firstname = isset($_REQUEST["firstname"]) ? $_REQUEST["firstname"] : '';
$lastname = isset($_REQUEST["lastname"]) ? $_REQUEST["lastname"] : '';
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : '';
$password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : '';
$repassword = isset($_REQUEST["repassword"]) ? $_REQUEST["repassword"] : '';

if(isset($_POST['nut']))
{


if( $firstname == "" || $lastname == "" || $email == "" || $password == "" || $repassword == "" )
{
    echo '<script type="text/javascript">
            alert("Vui Lòng Nhập Đủ thông Tin !");
                        </script>
                        ';
}else
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $repass=$_POST['repassword'];
    $kq=$toeic->xulyRegister($fname,$lname,$email,$pass);
    if($kq)
    {
    echo '<script type="text/javascript">
            alert("ĐÃ ĐĂNG KÝ THÀNH CÔNG!");
                        </script>
                        ';
    }else
    {
     echo '<script type="text/javascript">
            alert("ĐĂNG KÝ THẤT BẠI!");
                        </script>
                        ';       
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
                        <td colspan="3"><input type="text" name="lastname" placeholder="Last name" autofocus></td>
                    </tr>

                    <tr>
                        <td colspan="3"><input type="text" name="firstname" placeholder="First name" ></td>
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
                            <button class="btn btn-success" type="submit" name="nut" id="nut">ĐĂNG KÍ</button>
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
        top: 475px;
        left: 309px;
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
                    {
                        $("#checkValidate").html(d).show();
                        /*setTimeout(function(){
                            $("#checkValidate").html("");
                            $("#checkValidate").hide();
                        },3000);*/
                    }

                    else {
                        $("#checkValidate").html("");
                        $("#checkValidate").hide();
                    }
                });
        });
/*bat dau xu ly repass va pass*/
               $('#password').blur(function(){
                    var password = $('#password').val();
                     var repassword = $('#repassword').val();
                            $.get(
                                'Controller/checkValidate.php',
                                {pass:password,repass:repassword},
                                function (d) {
                                    if (d != "")
                                    {
                                        $("#checkValidate").html(d).show();
                                        /*setTimeout(function(){
                                            $("#checkValidate").html("");
                                            $("#checkValidate").hide();
                                        },3000);*/
                                    }

                                    else {
                                        $("#checkValidate").html("");
                                        $("#checkValidate").hide();
                                    }
                                });
                        });


                $('#repassword').blur(function(){
                    var password = $('#password').val();
                     var repassword = $('#repassword').val();
                            $.get(
                                'Controller/checkValidate.php',
                                {pass:password,repass:repassword},
                                function (d) {
                                    if (d != "")
                                    {
                                        $("#checkValidate").html(d).show();
                                        /*setTimeout(function(){
                                            $("#checkValidate").html("");
                                            $("#checkValidate").hide();
                                        },3000);*/
                                    }

                                    else {
                                        $("#checkValidate").html("");
                                        $("#checkValidate").hide();
                                    }
                                });
                        });

/*ket thuc repass va pass*/
/*bat dau xu ly email*/
                $('#email').blur(function(){
                    var email = $('#email').val();
                            $.get(
                                'Controller/checkValidate.php',
                                {email:email},
                                function (d) {
                                    if (d != "")
                                    {
                                        $("#checkValidate").html(d).show();
                                    }

                                    else {
                                        $("#checkValidate").html("");
                                        $("#checkValidate").hide();
                                    }
                                });
                        });

/*ket thuc xu ly email*/
    });
    $(document).ready(function () {
        $("form").submit(function (event) {
            var text = $("#checkValidate").html();
            if (text != "")
            {
                alert("Không Thể Thực Thi !");
                event.preventDefault();
                /*window.location = "http://localhost/ToeicThi/View/Register.html";*/
            }
            
        });
    });
</script>
