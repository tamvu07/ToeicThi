<?php
require_once "connection.php";

class toiec extends connection
{
    function login($email, $pass)
    {
        $email = $this->db->escape_string(trim(strip_tags($email)));
        $pass = $this->db->escape_string(trim(strip_tags($pass)));
//        $pass=md5($pass);
        $sql = "select * from nguoidung where Mail='$email' and MatKhau='$pass'";
        $kq = $this->db->query($sql);
        if ($kq->num_rows > 0) return $kq;
        return false;
    } // end login

    function getTinTuc($param)
    {
        if ($param == 'vi') {
            $sql = "select * from tintuc where NgonNgu='vi'";
            $kq = $this->db->query($sql);
            if ($kq->num_rows > 0) return $kq;
        } elseif ($param == 'en') {
            $sql = "select * from tintuc where NgonNgu='en'";
            $kq = $this->db->query($sql);
            if ($kq->num_rows > 0) return $kq;
        } else {
            $sql = "select * from tintuc";
            $kq = $this->db->query($sql);
            if ($kq->num_rows > 0) return $kq;
        }
        return $this->db->error;
    }

    function getIdUser($idUser)
    {
        $sql = "select * from nguoidung where IdUser='$idUser'";
        $kq = $this->db->query($sql);
        if ($kq->num_rows > 0) return $kq;
        return $this->db->error();
    }
}

//cac method
?>