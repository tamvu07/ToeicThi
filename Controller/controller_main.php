<?php
require_once "../Model/model.php";

class controller_main extends model
{
    function lay_UserTheoId($idUser){
        $con=new model();
        $idUser=strip_tags(trim($idUser));
        $kq=$con->getUserById($idUser);
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    } // end function lay_UserTheoId

    function kiemtra_Login(){
        $con = new model();
        if(isset($_COOKIE['cookie_login'])){
            $id=$_COOKIE['login_id'];
            $id = $this->con->escape_string(trim(strip_tags($id)));
            $kq=$con->getUserById($id);
            if($kq->num_rows>0){
                $row=$kq->fetch_assoc();
                $this->xulyLogin($row['Mail'],$row['MatKhau']);
            }
            return $this->con->error;
        }
    }

    function xulyLogin($email, $pass)
    {
        $con = new model();
        $email = $this->con->escape_string(trim(strip_tags($email)));
        $pass = $this->con->escape_string(trim(strip_tags($pass)));
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
                $_SESSION['login_id'] = $row['IdUser'];
                $_SESSION['login_level'] = $row['Quyen'];
                $_SESSION['login_email'] = $row['Mail'];
                $_SESSION['login_name'] = $row['HoTen'];
                $_SESSION['avatar'] = $row['Avatar'];
                if (isset($_POST['remember'])) {

                    setcookie('cookie_login',1,time() + 2592000,"/");
                    setcookie('login_id',$row['IdUser'],time() + 2592000,"/");

                    $_SESSION['login_id'] = $row['IdUser'];
                    $_SESSION['login_level'] = $row['Quyen'];
                    $_SESSION['login_email'] = $row['Mail'];
					$_SESSION['login_lname'] = $row['Ho'];
                    $_SESSION['login_fname'] = $row['Ten'];
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

    function lay_TinTuc($language){
        $con = new model();
        $lang=strip_tags(trim($language));
        $kq=$con->getTinTuc($lang);
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    } // end function lay_TinTuc

    function lay_DeThi(){
        $con=new model();
        $kq=$con->layDeThi();
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    } // end function lay_DeThi

    function lay_DeThi_TheoMaDe($maDe){
        $con=new model();
        $maDe=strip_tags(trim($maDe));
        $kq=$con->layDeThiTheoMaDe($maDe);
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    } // end function lay_DeThi_TheoMaDe

    function lay_binhluan($maDe,$pageNum,$pageSize,&$totalRows){
        $con = new model();
        $startRow=($pageNum-1)*$pageSize;
        $kq=$con->layBinhLuan($maDe);
        if(!$kq) return $this->con->error;

        $sql="select count(*) from binhluan where MaDe=$maDe";
        $rows=$this->con->query($sql);
        if(!$rows) die($this->con->error);
        $rows_kq=$rows->fetch_row();
        $totalRows=$rows_kq[0];

        return $kq;
    } // end function lay_binhluan

    function phan_Trang($baseURL,$pageNum,$pageSize,$totalRows){
        if($totalRows<=0) return "";
        $totalPages=ceil($totalRows/$pageSize);
        if($totalPages<=1) return "";
        $from=$pageNum-3;
        $to=$pageNum+3;
        if($from<=0){ $from=1;$to=3*2;}
        if($to>$totalPages){ $to=$totalPages;}
        $links="<ul class='pagination justify-content-end'>";
        for($j=$from;$j<=$to;$j++){
            if($j==$pageNum){
                $links=$links."<li class='page-item'><a class='page-link active' href='$baseURL/$j/'>$j</a></li>";
            }
            else{
                $links=$links."<li class='page-item'><a class='page-link' href='$baseURL/$j/'>$j</a></li>";
            }
            $links=$links."</ul>";
            return $links;
        }
    } // end function phan_Trang
}
?>
