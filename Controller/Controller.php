<?php
require_once("../Model/model_admin.php");
class Controller extends model_admin {
	function get_list_users() {
		$p = new model_admin();
		$p->set_query($p->get_list_users());
		while($rows=$p->load_rows()) {
		echo '<tr><td>'.$rows["IdUser"].'</td>
		<td>'.$rows["HoTen"].'</td>
		<td>'.$rows["GioiTinh"].'</td>
		<td>'.$rows["Mail"].'</td>
		<td>'.$rows["Quyen"].'</td>
		<td>'.$rows["NgayThamGia"].'</td>
		<td>'.$rows["KichHoat"].'</td></tr>';
		}
	}
}
?>