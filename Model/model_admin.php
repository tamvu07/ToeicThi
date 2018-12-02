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
        $sql = "ALTER TABLE nguoidung AUTO_INCREMENT 1;";
        $this->con->query($sql);
        $sql = "INSERT INTO nguoidung(IdUser,Ho,Ten,GioiTinh,MatKhau,Quyen,Mail,KichHoat,Avatar,NgayThamGia) VALUES( NULL, '$ho', '$ten', '$gioitinh', '$matkhau', '$quyen', '$mail', '1', NULL, CURRENT_TIMESTAMP)";
        $kq = $this->con->query($sql);
        if($this->con->affected_rows>0) return true;
        return false;
    }
    
    protected function get_user_by_email($email)
    {
        $sql = "SELECT Mail FROM nguoidung WHERE Mail='".$email."'";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0)
            return $kq;
        else
            return false;
    }
    
    protected function get_edit_user_by_id($id)
    {
        $sql = "SELECT IdUser,Ho,Ten,GioiTinh,MatKhau,Quyen,Mail,KichHoat,Avatar,NgayThamGia FROM nguoidung WHERE IdUser='".$id."'";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0)
            return $kq;
    }

    protected function action_edit_user_by_id($id,$ho,$ten,$gioitinh,$kichhoat,$quyen)
    {
        $sql = "UPDATE nguoidung SET Ho='$ho', Ten='$ten', GioiTinh='$gioitinh', KichHoat=$kichhoat, Quyen=$quyen
        WHERE IdUser='$id'
        ";
        $kq = $this->con->query($sql);
        if($kq->affected_rows>0)
            return true;
        return false;
    }

    // protected function delete_user_by_id($id)
    // {
    //     $sql = "DELETE FROM nguoidung WHERE IdUser='$id'";
    //     $kq = $this->con->query($sql);
    //     if($kq->affected_rows!=0)
    //         return true;
    //     return false;
    // }

    protected function get_question_numbers($made,$loaicauhoi)
    {
        $sql = "select ch.MaCauHoi,ch.NoiDung,tl.A,tl.B,tl.C,tl.D,tl.DapAn FROM cauhoi ch JOIN traloi tl ON ch.MaCauHoi=tl.MaCauHoi WHERE ch.MaDe='$made' AND ch.LoaiCauHoi='$loaicauhoi'
        ";
        $kq = $this->con->query($sql);
        return $kq->num_rows;
    }

    protected function add_dethi($ten,$mota,$thoiluong,$socau,$ngayhethan,$nguoitao,$trangthai)
    {
        $sql = "INSERT INTO dethi(TieuDe,MoTa,ThoiLuong,SoCau,NgayHetHan,NguoiTao,TrangThai) 
        VALUES ('$ten','$mota',$thoiluong,$socau,'$ngayhethan',$nguoitao,$trangthai)";
        $kq = $this->con->query($sql);
        if($kq->affected_rows!=0)
            return true;
        return false;
    }

    protected function get_dethi_by_id($made)
    {
        $sql = "SELECT MaDe, TieuDe, MoTa, DATE_FORMAT(NgayHetHan, '%Y-%m-%dT%H:%i') as NgayHetHan, NguoiTao, TrangThai FROM dethi WHERE MaDe=$made LIMIT 1";
        $kq = $this->con->query($sql);
        if($kq->num_rows!=0)
            return $kq;
        return 0;
    }

    protected function action_edit_dethi_by_id($made,$tende,$mota,$ngayhethan,$trangthai)
    {
        $sql = "UPDATE dethi SET TieuDe='$tende', MoTa='$mota', NgayHetHan='$ngayhethan', TrangThai=$trangthai
        WHERE MaDe='$made'";
        $kq = $this->con->query($sql);
        if($kq->affected_rows>0)
            return true;
        return false;
    }

}
?>