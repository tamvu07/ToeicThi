<?php
require_once "../Model/model.php";

class controller_main extends model
{
    function xulyLogin($email, $pass)
    {
        $con = new model();
        $kq = $con->login($email, $pass);
        if (!$kq) {
            echo "<script>
            $(document).ready(function () {
                $('#email').val('$email');
                $('#checkValidate').html('<strong>Sai email hoặc password !</strong>').show();
            });
        </script>";
        } else {
            $row = $kq->fetch_assoc();
            if ($row['KichHoat'] == 1) {
                if (isset($_POST['remember'])) {
                    $_SESSION['login_id'] = $row['IdUser'];
                    $_SESSION['login_level'] = $row['Quyen'];
                    $_SESSION['login_email'] = $row['Mail'];
                    $_SESSION['login_name'] = $row['HoTen'];
                    $_SESSION['avatar'] = $row['Avatar'];
                }
                if (isset($_SESSION['back'])) {
                    $back = $_SESSION['back'];
                    unset($_SESSION['back']);
                    header("location: $back");
                }
            } else {
                echo "<script>
                $(document).ready(function () {
                    $('#email').val('$email');
                    $('#checkValidate').html('<strong>Tài khoản chưa được kích hoạt !</strong>').show();
                });
            </script>";
            }
        }
    } // end function xulyLogin

    function lay_DeThi(){
        $con=new model();
        $kq=$con->layDeThi();
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    }
}
?>
