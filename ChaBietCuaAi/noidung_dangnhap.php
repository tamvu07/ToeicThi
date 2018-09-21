<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
	if(isset($_SESSION['USER']))
	{
		echo "<script>document.location.href='index.php';</script>";
	}
	else
	{
?>

	<div class="main-container container" id="main-container">            
      <!-- post content -->
      <div class="blog__content mb-72">        
        <div class="row justify-content-center">        	
          	<div class="col-lg-4">
	            <h1 style="text-align: center;">Đăng Nhập</h1>
	            <form action="" method="post">
				  <div class="form-group">
				    <label for="email">Tài Khoản: </label>
				    <input class="form-control" type="text" autocomplete="off" name="userid" id="userid">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Mật Khẩu: </label>
				    <input class="form-control" type="password" autocomplete="off" name="password" id="password">
				  </div>				  
				  <input name="dangnhap" type="submit" class="btn btn-lg btn-color btn-button right" id="dangnhap" value="Đăng nhập">
				</form>
          	</div>          	
        </div>
      </div>
    </div>

<?php }
?>
</body>
</html>

<?
	if(isset($_POST['dangnhap']))
	{
		$id = $_POST['userid'];
		$pass = $_POST['password'];
		if($id && $pass)
		{
			include("config/connect.php");
			$sql = "select * from user where Username='".$id."' and Password='".$pass."'";
			$query = mysql_query($sql);
			$count = mysql_num_rows($query);
			if($count != 1)
			{
				echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!');</script>";
			}
			else
			{
				//echo "<script>alert('Đăng nhập thành công!');</script>";
				session_start();
				$row = mysql_fetch_array($query);
				$_SESSION['USER'] = $row['Username'];
				$_SESSION['LEVEL'] = $row['Level'];
				$_SESSION['TEN'] = $row['Ten'];
				$_SESSION['EMAIL'] = $row['Email'];
				echo "<script>document.location.href='index.php?page=trangchu'</script>";	
			}
		}
	}
?>