<?php
require_once "connection.php";
class toiec extends connection{
    function login($email,$pass){
        $email=$this->db->escape_string(trim(strip_tags($email)));
        $pass=$this->db->escape_string(trim(strip_tags($pass)));
        $pass=md5($pass);
        $sql="select * from nguoidung where Mail='$email' and MatKhau='$pass'";
        $kq=$this->db->query($sql);
        if($kq->num_rows>0) return $kq;
        return false;
    }
}
//cac method
?>