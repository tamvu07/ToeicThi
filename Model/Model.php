<?php
require_once "../database/connection.php";

class model extends connection
{
    protected function login($email, $pass)
    {
        //$pass = md5($pass);
        $sql = "select * from nguoidung where Mail='$email' and MatKhau='$pass'";
        $kq = $this->con->query($sql);
        if ($kq->num_rows > 0) return $kq;
        return false;
    } // end login

    protected function register($lname,$fname,$email,$pass){
        $sql="INSERT INTO nguoidung (IdUser, Ho, Ten, GioiTinh, MatKhau, Quyen, Mail, KichHoat, Avatar, NgayThamGia) VALUES (NULL, '$lname', '$fname',NULL, '$pass', '3', '$email', '0', NULL, CURRENT_TIMESTAMP)";
        $kq=$this->con->query($sql);
        if($this->con->affected_rows>0) return true;
        return $this->con->error;
    }

    protected function getTinTuc($param)
    {
        if ($param == 'vi') {
            $sql = "select * from tintuc where NgonNgu='vi'";
            $kq = $this->con->query($sql);
            if ($kq->num_rows > 0) return $kq;
        } elseif ($param == 'en') {
            $sql = "select * from tintuc where NgonNgu='en'";
            $kq = $this->con->query($sql);
            if ($kq->num_rows > 0) return $kq;
        } else {
            $sql = "select * from tintuc";
            $kq = $this->con->query($sql);
            if ($kq->num_rows > 0) return $kq;
        }
        return $this->con->error;
    } // end getTinTuc

    protected function getUserById($idUser)
    {
        $sql = "select * from nguoidung where IdUser='$idUser'";
        $kq = $this->con->query($sql);
        if ($kq->num_rows > 0) return $kq;
        return $this->con->error;
    } // end getIdUser

    protected function getUserByEmail($email){
        $sql = "select * from nguoidung where Mail='$email'";
        $kq = $this->con->query($sql);
        if ($kq->num_rows > 0) return $kq;
        return $this->con->error;
    }

    protected function layDeThi(){
        $sql="select * from dethi ORDER BY MaDe DESC";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    } // end layDeThi

    protected function layDeThiTheoMaDe($maDe){
        $sql="select * from dethi where MaDe=$maDe";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
    } // end layDeThiTheoMaDe

    protected function layBinhLuan($maDe,$startRow,$pageSize){
        $maDe = $this->con->real_escape_string(trim($maDe));
        $sql="select * from binhluan where MaDe=$maDe ORDER BY MaBinhLuan DESC limit $startRow,$pageSize";
        $kq=$this->con->query($sql);
        if(!$kq) die($this->con->error);
        return $kq;
    } // end layBinhLuan

    protected function luuBinhLuan($idUser,$maDe,$bl){
        $sql="INSERT INTO binhluan (MaBinhLuan, NguoiDang, NoiDung, NgayDang, NgayChinhSua, MaDe) VALUES (NULL, '$idUser', '$bl', CURRENT_TIMESTAMP, NULL, '$maDe');";
        $kq=$this->con->query($sql);
        if($this->con->affected_rows>0) return true;
        return $this->con->error;
    }

    protected function layBaiLamTheoId($idUser){
        $sql="select * from bailam where IdUser=$idUser";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return false;
    }

   /*bat dau trang profile*/
    protected function upload_profile_database_all($txt_ho,$txt_ten,$txt_matkhau,$avatar,$gioitinh){
    $pass = $this->con->escape_string(trim(strip_tags($txt_matkhau)));

    $idUser = $_SESSION['login_id'];
    $sql = "UPDATE nguoidung set Ho='$txt_ho',Ten='$txt_ten',MatKhau='$pass',GioiTinh='$gioitinh', Avatar='$avatar' where IdUser = '$idUser' ";
    $kq = $this->con->query($sql);
    if($kq == true){
        return true;
    }else{
        return false;
    }

}

    protected function profile_display_all_database(){
        $idUser = $_SESSION['login_id'];
    $sql = "SELECT * from nguoidung where IdUser = '$idUser' ";
    $kq = $this->con->query($sql);
    if($kq->num_rows > 0) return $kq;
    return $this->con->error();
    }

    /*ket thuc trang profile*/

    protected function layDanhSachDuThi_Theo_IdUser($idUser){
        $sql="select * from danhsachduthi where IdUser='$idUser'";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return false;
    } // end layDanhSachDuThi_Theo_IdUser

    protected function dangki_DuThi($idUser,$made){
        $sql="INSERT INTO danhsachduthi (STT, MaDe, IdUser, VangMat) VALUES (NULL, '$made', '$idUser', NULL)";
        $kq=$this->con->query($sql);
        if($this->con->affected_rows>0) return true;
        return false;

    } // end dangki_DuThi

    protected function getDanhSachDuThi(){
        $sql="select * from danhsachduthi";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
    } // end getDanhSachDuThi

    protected function getDanhSachDuThiTheoIdUser($idUser){
        $sql="select * from danhsachduthi where IdUser='$idUser'";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
    } // end getDanhSachDuThiTheoIdUser
}


//cac method
?>