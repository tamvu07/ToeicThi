<?php
require_once("../Model/model_admin.php");
$rows = null;
class controller_admin extends model_admin {
	
	//In bảng người dùng trong giao diện admin
	function print_users_table($rows,$p) {
		echo '
		<table class="table table-hover table-striped">
			<thead>
				<th>ID</th> 
				<th>Họ tên</th>
				<th>Giới tính</th>
				<th>Email</th>
				<th>Quyền</th>
				<th>Ngày tham gia</th>
				<th>Trạng thái</th>
			</thead>
			<tbody>';
		while($rows=$p->load_rows()) {
		echo '<tr><td>'.$rows["IdUser"].'</td>
		<td>'.$rows["HoTen"].'</td>
		<td>'.$rows["GioiTinh"].'</td>
		<td>'.$rows["Mail"].'</td>
		<td>'.$rows["Quyen"].'</td>
		<td>'.$rows["NgayThamGia"].'</td>
		<td>'.$rows["KichHoat"].'</td></tr>';
		}
		echo '</tbody></table>';
	}
	
	//Lấy danh sách tất cả người dùng
	function get_list_users() {
		$p = new model_admin();
		$p->select($p->get_list_users());
		$this->print_users_table($rows,$p);
	}
	
	//Lấy danh sách admin
	function get_list_admins() {
		$p = new model_admin();
		$p->select($p->get_list_admins());
		$this->print_users_table($rows,$p);
	}
	
	//Lấy danh sách giáo viên
	function get_list_teachers() {
		$p = new model_admin();
		$p->select($p->get_list_teachers());
		$this->print_users_table($rows,$p);
	}
	
	//Lấy danh sách học viên
	function get_list_students() {
		$p = new model_admin();
		$p->select($p->get_list_students());
		$this->print_users_table($rows,$p);
	}
	
	//Thêm người dùng
	function add_user($hoten, $gioitinh, $matkhau, $quyen, $mail)
	{
		$add = new model_admin();
		$add->add_user($hoten, $gioitinh, $matkhau, $quyen, $mail);
	}
	
}
?>