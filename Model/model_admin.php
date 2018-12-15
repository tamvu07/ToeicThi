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

    protected function get_list_exam_by_status($trangthai) {
        $sql = "SELECT * FROM dethi WHERE TrangThai=$trangthai";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0)
            return $kq;
        return 0;
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
        if($kq)
            return true;
        return false;
    }

    protected function get_dethi_by_id($made)
    {
        $sql = "SELECT MaDe, TieuDe, MoTa, DATE_FORMAT(NgayHetHan, '%Y-%m-%dT%H:%i') AS NgayHetHan, NguoiTao, TrangThai 
        FROM dethi WHERE MaDe=$made LIMIT 1";
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

    protected function get_all_questions_by_made($made) {
        $sql = "SELECT ch.MaCauHoi, ch.MaDe, ch.LoaiCauHoi, ch.NoiDung, tl.A, tl.B, tl.C, tl.D, tl.DapAn, ch.TrangThai
        FROM cauhoi ch JOIN traloi tl
        ON ch.MaCauHoi=tl.MaCauHoi WHERE ch.MaDe='$made' ORDER BY ch.MaDe ASC, ch.MaCauHoi ASC";
        $kq = $this->con->query($sql);
        return $kq;
    }

    protected function get_question_by_type_made($loaicauhoi,$dethi)
    {
        $sql = "SELECT ch.MaCauHoi, ch.MaDe, ch.LoaiCauHoi, ch.NoiDung, tl.A, tl.B, tl.C, tl.D, tl.DapAn, ch.TrangThai
        FROM cauhoi ch JOIN traloi tl
        ON ch.MaCauHoi=tl.MaCauHoi WHERE LoaiCauHoi='$loaicauhoi' AND ch.MaDe='$dethi' ORDER BY ch.MaDe ASC, ch.MaCauHoi ASC";
        $kq = $this->con->query($sql);
        return $kq;
    }

    protected function get_question_by_id($macauhoi)
    {
        $sql = "SELECT ch.MaCauHoi, ch.MaDe, ch.LoaiCauHoi, ch.TrangThai, ch.NoiDung, tl.A, tl.B, tl.C, tl.D, tl.DapAn
        FROM cauhoi ch JOIN traloi tl
        ON ch.MaCauHoi=tl.MaCauHoi WHERE ch.MaCauHoi='$macauhoi'";
        $kq = $this->con->query($sql);
        return $kq;
    }

    protected function get_all_sub_question_by_question_id($macauhoi)
    {
        $sql = "SELECT ch.MaCauHoi, chn.Id AS MaCauHoiNho, ch.MaDe, ch.LoaiCauHoi, ch.NoiDung, chn.NoiDung AS NoiDungNho, tl.A, tl.B, tl.C, tl.D, tl.DapAn
        FROM cauhoi ch JOIN traloi tl ON ch.MaCauHoi=tl.MaCauHoi 
        JOIN cauhoinho chn ON tl.IdCauhoinho=chn.Id
        WHERE ch.MaCauHoi='$macauhoi'";
        $kq = $this->con->query($sql);
        return $kq;
    }

    protected function check_question_sub_available($macauhoi)
    {
        $sql = "SELECT ch.MaCauHoi
        FROM cauhoi ch JOIN cauhoinho chn
        ON ch.MaCauHoi=chn.MaCauHoi
        WHERE ch.MaCauHoi='$macauhoi'";
        $kq = $this->con->query($sql);
        if($kq->num_rows>0)
            return true;
        return false;
    }

    protected function add_single_question($made,$noidung,$loaicauhoi,$nguoitao,$a,$b,$c,$d,$dapan)
    {
        $sql = "ALTER TABLE cauhoi AUTO_INCREMENT=1; ALTER TABLE traloi AUTO_INCREMENT=1;";
        $this->con->query($sql);
        $sql = "INSERT INTO cauhoi(MaDe,NoiDung,LoaiCauHoi,NguoiTao,TrangThai) VALUES 
        ($made,'$noidung','$loaicauhoi','$nguoitao',1)";
        $kq = $this->con->query($sql);
        if(!$kq)
            return false;
        $sql = "INSERT INTO traloi(MaCauHoi,A,B,C,D,DapAn) VALUES 
                ((SELECT MaCauHoi FROM cauhoi ORDER BY MaCauHoi DESC LIMIT 1),'$a','$b','$c','$d','$dapan')";
        $kqtl = $this->con->query($sql);
        if(!$kqtl)
            return false;
        return true;
    }

    protected function add_parent_question($made,$loaicauhoi,$noidung,$nguoitao)
    {
        $sql = "ALTER TABLE cauhoi AUTO_INCREMENT=1;";
        $this->con->query($sql);
        $sql = "INSERT INTO cauhoi(MaDe,LoaiCauHoi,NoiDung,NguoiTao) VALUES('$made','$loaicauhoi','$noidung','$nguoitao')";
        $kq = $this->con->query($sql);
        if($kq)
            return true;
        return false;
    }

    protected function get_last_question_id()
    {
        $sql = "SELECT MaCauHoi FROM cauhoi ORDER BY MaCauHoi DESC LIMIT 1";
        $kq = $this->con->query($sql);
        return $kq;
    }

    protected function get_fresh_question_by_id($macauhoi)
    {
        $sql = "SELECT NoiDung,LoaiCauHoi FROM cauhoi WHERE MaCauHoi='$macauhoi'";
        $kq = $this->con->query($sql);
        return $kq;
    }

    protected function add_child_question($macauhoi,$loaicauhoi,$noidung,$a,$b,$c,$d,$dapan)
    {
        $sql = "ALTER TABLE cauhoinho AUTO_INCREMENT=1; ALTER TABLE traloi AUTO_INCREMENT=1;";
        $this->con->query($sql);
        $sql = "INSERT INTO cauhoinho(LoaiCauHoi,MaCauHoi,NoiDung) VALUES('$loaicauhoi','$macauhoi','$noidung')";
        $kq = $this->con->query($sql);
        if(!$kq)
            return false;
        $sql = "INSERT INTO traloi(MaCauHoi, A, B, C, D, DapAn, IdCauhoinho)
                VALUES('$macauhoi','$a','$b','$c','$d','$dapan',(SELECT Id FROM cauhoinho ORDER BY Id DESC LIMIT 1))";
        $kqtl = $this->con->query($sql);
        if(!$kqtl)
            return false;
        return true;
    }

    protected  function action_edit_single_question_by_id($macauhoi,$made,$loaicauhoi,$trangthai,$noidung,$a,$b,$c,$d,$dapan)
    {
        $sql = "UPDATE cauhoi SET MaDe='$made', LoaiCauHoi='$loaicauhoi', TrangThai='$trangthai', NoiDung='$noidung'
                WHERE MaCauHoi='$macauhoi'";
        $kq = $this->con->query($sql);
        if(!$kq)
            return false;
        $sql = "UPDATE traloi SET A='$a', B='$b', C='$c', D='$d', DapAn='$dapan' WHERE MaCauHoi='$macauhoi'";
        $kq = $this->con->query($sql);
        if(!$kq)
            return false;
        return true;
    }

    protected function action_edit_sub_question_by_id($macauhoinho,$noidung,$a,$b,$c,$d,$dapan)
    {
        $sql = "UPDATE cauhoinho SET NoiDung='$noidung' WHERE Id='$macauhoinho'";
        $kq = $this->con->query($sql);
        if(!$kq)
            return false;
        $sql = "UPDATE traloi SET A='$a', B='$b', C='$c', D='$d', DapAn='$dapan' WHERE IdCauhoinho='$macauhoinho'";
        $kq = $this->con->query($sql);
        if(!kq)
            return false;
        return true;
    }
    protected function get_news($param){
	    if($param==0) $sql="select * from tintuc";
	    elseif($param==1) $sql="select * from tintuc where NgonNgu='vi' order by MaTinTuc desc";
	    elseif($param==2) $sql="select * from tintuc where NgonNgu='en' order by MaTinTuc desc";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0) return $kq;
        return $this->con->error;
    } // end function get_news

    protected function add_new_news($tieuDe,$noiDung,$tomTat,$img,$idUser,$ngonNgu){
        $sql = "INSERT INTO tintuc(TieuDe,NoiDung,TomTat,AnhMinhHoa,NguoiTao,NgayTao,NgonNgu) 
        VALUES ('$tieuDe','$noiDung','$tomTat','$img','$idUser',CURRENT_TIMESTAMP ,'$ngonNgu')";
        $kq = $this->con->query($sql);
        if($this->con->affected_rows>0)
            return true;
        return false;
    } // end function add_new_news

    protected function count_admin(){
	    $sql="select count(*) from nguoidung where Quyen='1'";
	    $kq=$this->con->query($sql);
        if($kq->num_rows>0){
            $row=$kq->fetch_row();
            return $row[0];
        }
	    else return $this->con->error;
    } // end function count_admin

    protected function count_hocvien(){
        $sql="select count(*) from nguoidung where Quyen='3'";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0){
            $row=$kq->fetch_row();
            return $row[0];
        }
        else return $this->con->error;
    } // end function count_admin

    protected function count_giaovien(){
        $sql="select count(*) from nguoidung where Quyen='2'";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0){
            $row=$kq->fetch_row();
            return $row[0];
        }
        else return $this->con->error;
    } // end function count_admin

    protected function count_dsDuThi_De1(){
        $sql="select count(*) from danhsachduthi where MaDe='1'";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0){
            $row=$kq->fetch_row();
            return $row[0];
        }
        else return $this->con->error;
    } // end function count_dsDuThi_De1

    protected function count_dsDuThi_De2(){
        $sql="select count(*) from danhsachduthi where MaDe='2'";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0){
            $row=$kq->fetch_row();
            return $row[0];
        }
        else return $this->con->error;
    } // end function count_dsDuThi_De2

    protected function count_binhluan_MaDe($made){
        $sql="select count(*) from binhluan where MaDe='$made'";
        $kq=$this->con->query($sql);
        if($kq->num_rows>0){
            $row=$kq->fetch_row();
            return $row[0];
        }
        else return $this->con->error;
    } // end function count_dsDuThi_De2
}
?>