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

    protected function register($lname,$fname,$email,$pass,$gender){
        $sql="INSERT INTO nguoidung (IdUser, Ho, Ten, GioiTinh, MatKhau, Quyen, Mail, KichHoat, Avatar, NgayThamGia) VALUES (NULL, '$lname', '$fname', '$gender', '$pass', '3', '$email', '0', NULL, CURRENT_TIMESTAMP)";
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
        $sql="select * from dethi";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    } // end layDeThi

    protected function layDeThiTheoMaDe($maDe){
        $sql="select * from dethi where MaDe=$maDe";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
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
}

//cac method
?>