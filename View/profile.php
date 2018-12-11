<!-- moi lay tu master ve  , day la tam27_10-->

<?php
if(isset($_SESSION['login_id'])){
    $idUser=$_SESSION['login_id'];
}
else{
    echo '<script>alert("Bạn chưa đăng nhập");document.location="View/"</script>';

}

$label_display_all = "Thay Đổi Thông Tin !";
$kq = $toeic->lay_UserTheoId($_SESSION['login_id']);
$row = $kq->fetch_assoc();
$txt_ho1 = $row['Ho'];
$txt_ten1 = $row['Ten'];
/*$email = $row['Mail'];*/
$txt_matkhau1 = $row['MatKhau'];

$avatar = $row['Avatar'];
$gioitinh = $row['GioiTinh'];
?>

<?php
/*bat dau upload ho */
if (isset($_POST['profile_submit'])) {
    if (isset($_POST['txt_ho'])) {
        $txt_ho = $_POST['txt_ho'];
    }
    else{
        $txt_ho=$txt_ho1;
    }

    if (isset($_POST['txt_ten'])) {
        $txt_ten = $_POST['txt_ten'];
    }
    else{
        $txt_ten=$txt_ten1;
    }

    if (isset($_POST['txt_matkhau'])) {
        $txt_matkhau = $_POST['txt_matkhau'];
    }
    else{
        $txt_matkhau=$txt_matkhau1;
    }

    if (isset($_POST['gioitinh'])) {
        $gioitinh = $_POST['gioitinh'];
    }
    else{
        $gioitinh=$gioitinh;
    }

    /*bat dau xu ly img*/
    if (isset($_FILES["avatar"])) {

        $mang_type = array("png", "jpg", "gif", "jpeg", "PNG", "JPG", "GIT", "JPEG");
        $target_file = "../img/upload/" . basename($_FILES["avatar"]["name"]);
        $uploadok = 1;
        $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
        //check fake
        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if ($check != false) {
            $uploadok = 1;
        } else {
            $label_display_all = "File is not an image ." . "<br/>";
            $uploadok = 0;
            exit();
        }
        // check if file already exists
        /*    if(file_exists($target_file)){
              $label_display_all = "Sorry, file already exists."."<br/>";
              $uploadok = 0;
              exit();
            }*/
        // check file size  if($_FILES["avatar"]["size"] > $max*1024*1024){}
        if ($_FILES["avatar"]["size"] > 100 * 1024 * 1024) {
            $label_display_all = "Sorry, your file is too large." . "<br/>";
            $uploadok = 0;
            exit();
        }
        // allow certain file formats
        if (!in_array($imagefiletype, $mang_type)) {
            $label_display_all = "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "<br/>";
            $uploadok = 0;
            exit();
        }
        // check if $uploadOK is set to 0 by an errror
        if ($uploadok == 0) {
            $label_display_all = "Sorry, your file was not uploaded" . "<br/>";
        } else {
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                $avatar = $target_file;
            } else {
                $label_display_all = "Sorry, there was an error uploading your file img 2 va ho." . "<br/>";
            }
        }
    }
    else{
        $avatar=$avatar;
    }
    /*ket thuc xu ly img*/

    /*bat dau luu va hien thi*/
    $kq = $toeic->upload_profile_all($txt_ho, $txt_ten, $txt_matkhau, $avatar, $gioitinh);
    if ($kq) {
        $label_display_all = " Đã Cập Nhập !";
    } else {
        $label_display_all = "Cập Nhập Không Thành Công !";
    }
    $kq1 = $toeic->profile_display_all();
    if ($kq1->num_rows > 0) {
        while ($rows = $kq1->fetch_assoc()) {
            /*echo "co hinh la :".$rows['Avatar'];*/
            /* $avatar = $rows['Avatar'];*/
            $txt_ho1 = $rows['Ho'];
            $txt_ten1 = $rows['Ten'];
            $txt_matkhau1 = $rows['MatKhau'];
            $avatar = $rows['Avatar'];
            $gioitinh = $rows['GioiTinh'];

        }

    } else {
        echo "Do not display !";
    }


    /*ket thuc  luu va hien thi*/


}
/*ket thuc  uploasd ho */


?>


<div class="container contact-form">
    <h1>TRANG CÁ NHÂN CỦA BẠN</h1>
    <hr>
    <form method="post" action="" class="form" enctype="multipart/form-data" name="form" id="form">
        <div class="row">


            <div class="col-md-6">

                <div class="form-group">
                    <label><i class="ui ui-star"></i> Họ</label>
                    <div class="row">
                        <input id="txt_ho" name="txt_ho" type="text" class="form-control"
                               value="<?php echo $txt_ho1 ?>">
                        <label class="circle">
                            <a id="a_sua_ho" class="fa fa-pencil" aria-hidden="true"></a>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label><i class="ui ui-star"></i>Tên</label>
                    <div class="row">
                        <input id="txt_ten" name="txt_ten" type="text" class="form-control"
                               value="<?php echo $txt_ten1 ?>">
                        <label class="circle">
                            <a id="a_sua_ten" class="fa fa-pencil" aria-hidden="true"></a>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label><i class="fa fa-unlock-alt" aria-hidden="true"></i>Mật Khẩu</label>
                    <div class="row">
                        <input type="password" name="txt_matkhau" id="txt_matkhau" class="form-control"
                               value="<?php echo $txt_matkhau1 ?>">
                        <label class="circle">
                            <a id="a_sua_matkhau" class="fa fa-pencil" aria-hidden="true"></a>
                        </label>
                    </div>
                    <!-- start modal -->

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">

                                    <h4 class="modal-title">Mời bạn nhập lại mật khẩu</h4>


                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <!-- start  repassword -->

                                    <div class="row">
                                        <input id="txt_rematkhau" name="txt_rematkhau" type="password"
                                               class="form-control"
                                               placeholder="Nhập Lại Mật Khẩu ">
                                        <label class="circle">
                                            <a id="a_sua_ten" class="fa fa-pencil" aria-hidden="true"></a>
                                        </label>
                                    </div>

                                    <!-- end  repassword -->
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- end modal -->
                </div>


            </div>

            <div class="col-md-6">


                <div class="form-group">
                    <label><i class="fa fa-user-circle" aria-hidden="true"></i>Avatar</label>
                    <label id="label_img_display">
                        <img id="hinh" src="<?php
                        $a = str_replace("../", "", $avatar);
                        echo $a ?>">
                    </label>
                    <div class="row">
                        <input type="file" name="avatar" id="avatar_id" class="form-control" size="25"
                               value="Odaberi sliku">
                        <label class="circle">
                            <a id="a_sua_avatar" class="fa fa-pencil" aria-hidden="true"></a>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col">
                        <div class="row"><label><i class="fa fa-male" aria-hidden="true"></i> Giới Tính</label>
                            <label id="circle_gioitinh">
                                <a id="a_sua_gioitinh" class="fa fa fa-paint-brush" aria-hidden="true"></a>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input1" id="gioitinh_id_1" name="gioitinh"
                                           value="Nam" <?php if ($gioitinh == "Nam") echo "checked"; ?> >
                                    <label class="form-check-label" for="gioitinh_id_1" style="margin-left: 50px;">
                                        Nam </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input2" id="gioitinh_id_2" name="gioitinh"
                                           value="Nữ" <?php if ($gioitinh == "Nữ") echo "checked"; ?> >
                                    <label class="form-check-label" for="gioitinh_id_2"
                                           style="margin-left:80px;"> Nữ </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <input type="submit" name="profile_submit" id="profile_submit" value="LƯU">
            </div>
        </div>
        <label id="label_display"
               style=" width: 140%; margin-left: -1%; margin-top: 0%"><?php echo $label_display_all; ?></label>
    </form>
</div><br><br>

<?php
/*if(isset($_POST['up'] && isset($_FILES['fileupload']))
{
  $errors= array();
  $file_name = $_FILES['fileupload']['name'];
  $file_size = $_FILES['fileupload']['size'];
  $file_tmp = $_FILES['fileupload']['tmp_name'];
  $file_type = $_FILES['fileupload']['type'];
  $file_ext = strtolower(end(explode('.',$_FILES['fileupload']['name'])));

  $expensions= array("jpeg","jpg","png");

  /*mang in_array la : tim khong thay se tra ve true*/
/* if(in_array($file_ext,$expensions) === false)
 {
     $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
 }

 if($file_size > 2097152)
 {
   $errors[] = "Kích cỡ file nên là 2 MB";
 }

 if(empty($errors) == true )
 {
   move_uploaded_file($file_tmp,"");
 }

}*/
?>

<script type="text/javascript">

    $('#txt_ho').attr('disabled', 'disabled');
    $('#profile_submit').attr('disabled', 'disabled');

    $('#a_sua_ho').click(function () {
        $('#txt_ho').removeAttr('disabled');
    });

    $('#txt_ten').attr('disabled', 'disabled');

    $('#a_sua_ten').click(function () {
        $('#txt_ten').removeAttr('disabled');
    });

    $('#txt_matkhau').attr('disabled', 'disabled');

    $('#a_sua_matkhau').click(function () {
        $('#txt_matkhau').removeAttr('disabled');
    });

    $('#avatar_id').attr('disabled', 'disabled');
    $('#a_sua_avatar').click(function () {
        $('#avatar_id').removeAttr('disabled');
    });

    $('#gioitinh_id_1').attr('disabled', 'disabled');
    $('#gioitinh_id_2').attr('disabled', 'disabled');
    $('#a_sua_gioitinh').click(function () {
        $('#gioitinh_id_1').removeAttr('disabled');
        $('#gioitinh_id_2').removeAttr('disabled');
    });

    $(document).ready(function () {
        document.getElementById('txt_ho').addEventListener('change', Upload_Ho, false);
        document.getElementById('txt_ten').addEventListener('change', Upload_Ten, false);
        document.getElementById('txt_matkhau').addEventListener('change', show_modal_repassword, false);
        document.getElementById('txt_rematkhau').addEventListener('blur', test_show_modal_repassword, false);
        document.getElementById('avatar_id').addEventListener('change', AvatarUpload, false);
        document.getElementById('gioitinh_id_1').addEventListener('click', gioitinhpload, false);
        document.getElementById('gioitinh_id_2').addEventListener('click', gioitinhpload, false);


        function Upload_Ho() {
            $('#profile_submit').removeAttr('disabled');
            document.getElementById('profile_submit').style.background = 'hsla(150, 56%, 30%, 0.9411764705882353)';
            document.getElementById('profile_submit').style.color = 'white';
        }

        function Upload_Ten() {
            $('#profile_submit').removeAttr('disabled');
            document.getElementById('profile_submit').style.background = 'hsla(150, 56%, 30%, 0.9411764705882353)';
            document.getElementById('profile_submit').style.color = 'white';
        }


        function AvatarUpload(event) {
            var files = event.target.files;
            var fileName = files[0].name;
            var filesize = files[0].size;
            var filetype = files[0].type;

            if (filesize > 1050000) {
                alert('Image too big (max 1Mb)');
            } else if (!fileName.match(/.(jpg|jpeg|png|gif)$/i)) {
                alert('Image must in jpg , jpeg, gif ');
            } else {
                $('#profile_submit').removeAttr('disabled');
                document.getElementById('profile_submit').style.background = 'hsla(150, 56%, 30%, 0.9411764705882353)';
                document.getElementById('profile_submit').style.color = 'white';
            }
            /*console.log(files);*/


        }

        function gioitinhpload() {
            $('#profile_submit').removeAttr('disabled');
            document.getElementById('profile_submit').style.background = 'hsla(150, 56%, 30%, 0.9411764705882353)';
            document.getElementById('profile_submit').style.color = 'white';
        }

        /* bat dau nhap khau va nhap lai mat khau*/
        function show_modal_repassword() {
            $('#myModal').modal();
            $('#profile_submit').attr('disabled', 'disabled');
            document.getElementById('profile_submit').style.background = 'white';
            document.getElementById('profile_submit').style.color = 'black';
        }

        /* ket thuc nhap khau va nhap lai mat khau*/

        /*bat dau kiem tra repassword*/
        function test_show_modal_repassword() {
            var password = $('#txt_matkhau').val();
            var repassword = $('#txt_rematkhau').val();
            if (repassword == "") {
                alert("Bạn phải nhập lại mật khẩu .");
            } else {
                if (repassword != password) {
                    alert("Mật khẩu không đúng.");
                } else {
                    if (repassword == password) {
                        $('#myModal').modal('hide');
                        /* bat dau cho phep nut summit profile tu modal repassword */
                        $('#profile_submit').removeAttr('disabled');
                        document.getElementById('profile_submit').style.background = 'hsla(150, 56%, 30%, 0.9411764705882353)';
                        document.getElementById('profile_submit').style.color = 'white';
                        /* ket thuc cho phep nut summit profile tu modal repassword */
                    }
                }
            }
        }

        /*ket thuc kiem tra repassword*/


    });

</script>

<link href="css/Tam-Style-Profile.css" rel="stylesheet"/>

