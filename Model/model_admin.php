<?php
require_once "../database/connection.php";

class model_admin extends connection {
	
	protected function get_list_users() {
		$sql = "SELECT * FROM nguoidung";
		$kq = $this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
	}

    protected function get_list_admins() {
		$sql = "SELECT * FROM nguoidung WHERE Quyen=1";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
	}

    protected function get_list_teachers() {
		$sql = "SELECT * FROM nguoidung where Quyen=2";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
	}

    protected function get_list_students() {
		$sql = "SELECT * FROM nguoidung WHERE Quyen=3";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
	}

    protected function get_list_roles() {
		$sql = "SELECT * FROM quyen";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
	}

    protected function get_list_exam() {
        $sql = "SELECT * FROM dethi";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error();
    }

    protected function add_user($ho,$ten, $gioitinh, $matkhau, $quyen, $mail) {
		$sql = "INSERT INTO nguoidung(IdUser,Ho,Ten,GioiTinh,MatKhau,Quyen,Mail,KichHoat,Avatar,NgayThamGia) VALUES( NULL, '$ho', '$ten', '$gioitinh', '$matkhau', '$quyen', '$mail', '1', NULL, CURRENT_TIMESTAMP)";
        $kq = $this->con->query($sql);
        if($this->con->affected_rows()>0) return true;
        return $this->con->error();
	}
	
	
}
?>