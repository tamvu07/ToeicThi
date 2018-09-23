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

<div id="container" class="">  
    <div id="background"></div>
    <div id="login-form" class="col-xl-3">
        <section class="alert alert-dark">
        <form method="post">
            <table width="100%">
                <tr>
                    <td height="200" colspan="3"><img src="img/layout/login-logo.jpg"
                                                      style="border-radius: 100px;margin: 40px 0px 10px 0px"></td>
                </tr>
                <tr>
                    <td colspan="3"><h1>ĐĂNG KÝ</h1></td>
                </tr>

                 <tr>
                    <td colspan="3"><input type="text" name="username" id="username" placeholder="Username" autofocus>
                        <label id="label_username" style="display: none;"></label>
                        <br>
                </tr>

                <tr>
                    <td colspan="3"><input type="text" name="sdt" id="sdt" placeholder="Phone munber" autofocus><br>
                </tr>
                <tr>
                    <td colspan="3"><input type="email" name="email" id="email" placeholder="Email" autofocus><br>
                </tr>
                <tr>
                    <td colspan="3"><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="password" name="repassword" id="repassword" placeholder="Repassword" autofocus><br>
                </tr>
               
                <tr>
                    <td colspan="3" height="100">
                        <button class="btn btn-success" type="submit">ĐĂNG NHẬP</button>
                    </td>
                </tr>
            </table>
        </form>
        </section>
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
        $('#username').blur(function () { 
            $.get(
                    'View/checkValidate.php',
                    "username="+$('#username').val(),
                    function(data){
                        if(data == 1){  
                            $data = "<h4><span class='alert alert-warning' >chưa nhập họ tên !</span></h4>";
                            $('#label_username').html($data).show();
                            setTimeout(function(){$('#label_username').hide();},3000);
                             console.log(data);
                        }else if(data == 2){
                            $data = "<h4><span class='label label-warning' >Tên không hợp lệ !</span></h4>";
                            $('#label_username').html($data).show();
                            setTimeout(function(){$('#label_username').hide();},5000);
                            console.log(data);
                        }else if(data == 3){  
                            $data = "<h4><span class='label label-warning' >ten da ton tai !</span></h4>";
                            $('#label_username').html($data).show();
                            setTimeout(function(){$('#label_username').hide();},5000);
                            console.log(data);
                        }
                        else if(data == 0){  
                            $data = "<h4><span class='label label-warning' >thanh cong !</span></h4>";
                            $('#label_username').html($data).show();
                            setTimeout(function(){$('#label_username').hide();},5000);
                            console.log(data);
                        }
                        
                    }
                    );
        });
    });
</script>
