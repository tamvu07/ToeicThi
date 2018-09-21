<!DOCTYPE html>
<html>
<head>
<script>
	function validateForm()
	{
		var u = document.getElementById('username').value;
		var p = document.getElementById('password').value;
		var rp = document.getElementById('repassword').value;
		var t = document.getElementById('ten').value;
		if(u == "")
			alert("Chưa nhập tên đăng nhập!");
		else if(t == "")
			alert("Chưa nhập tên");
		else if(p == "" || rp == "")
			alert("Chưa nhập mật khẩu hoặc chưa xác nhận mật khẩu!");
		else if(p != rp)
			alert("Nhập lại mật khẩu không khớp!");
		else
			return true;
		return false;
	}
</script></head>
<body>
<?php
	if(isset($_SESSION['USER']))
	{
		echo "<script>alert('Vui lòng đăng xuất trước khi đăng ký');</script>";
		echo "<script>document.location.href='index.php';</script>";
	}
	else
	{
?>

<div class="main-container container" id="main-container">            
    <form style="width: 100%;" action="" method="POST" onsubmit="return validateForm()">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <div class="row card-row">
	    	<div class="col-lg-12">
		    	<h1 style="text-align: center;">Đăng Ký</h1>
		    </div>

		    <div class="col-lg-2">
		    	<p style="color:#007bff;border-bottom: 1px solid black;">Tài Khoản</p>
		    </div>
		    <div class="col-lg-4">
				<div class="form-group">
				    <label>Tên Tài Khoản (*): </label>
				    <input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
				    <label>Mật Khẩu (*): </label>
				    <input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="form-group">
				    <label>Nhập Lại Mật Khẩu (*): </label>
				    <input type="password" class="form-control" id="repassword" name="repassword">
				</div>
		    </div>
		    <div class="col-lg-6"></div>
		     <div class="col-lg-2">
		    	<p style="color:#007bff; border-bottom: 1px solid black;">Thông Tin Cá Nhân</p>
		    </div>
	    	<div class="col-lg-4">
	    		<div class="form-group">
				    <label>Họ: </label>
				    <input type="input" class="form-control" id="ho" name="ho">
				</div>
				<div class="form-group">
				    <label>Ngày sinh (ngày-tháng-năm): </label>
		              <input type="text" class="form-control"  name="ngaysinh" id="ngaysinh">
				</div>
				
		    </div>
		    <div class="col-lg-4">
		    	<div class="form-group">
				    <label>Tên (*): </label>
				    <input type="input" class="form-control" id="ten" name="ten">
				</div>
				<div class="form-group">
				    <label>Điện Thoại: </label>
				    <input type="input" class="form-control" id="dienthoai" name="dienthoai">
				</div>

				<div class="form-group">
				    <label>Email: </label>
				    <input type="email" class="form-control" id="email" name="email">
				</div>

		    </div>
		    <div class="col-lg-6">
		    </div>
		    <div class="col-lg-4 ">
				<input type="submit" class="btn btn-lg btn-color btn-button right" value="Đăng Ký" name="dangky" id="dangky">				
		    </div>	    
	    </div>
    </form>
</div> <!-- end main container --><?php } ?>
</body>
</html>
<?php
	if(isset($_POST['dangky']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$repass = $_POST['repassword'];
		$ho = $_POST['ho'];
		$ten = $_POST['ten'];
		$ngaysinh = $_POST['ngaysinh'];
		$dienthoai = $_POST['dienthoai'];
		$email = $_POST['email'];
		if($user && $pass && $repass)
		{
			include("config/connect.php");
			$check_ex = "select * from user where Username='".$user."'";
			$query = mysql_query($check_ex);
			if(mysql_num_rows($query) != "")
			{
				echo "<script>alert('Tên đăng nhập đã tồn tại'!);</script>";
			}
			//else if($pass != $repass)
			//{
			//	echo "<script>alert('Mật khẩu nhập lại không khớp!');</script>";
			//}
			else
			{
				$sql = "insert into user(Username,Password,Ho,Ten,Email,DOB,Phone,Level) values('".$user."','".$pass."','".$ho."','".$ten."','".$email."','".$ngaysinh."','".$dienthoai."','1')";
				$query2 = mysql_query($sql);
				//header("location:index.php?page=dangky_thanhcong");
				echo "<script>document.location.href='index.php?page=dangky_thanhcong';</script>";
			}
		}
	}
?>