<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
	window.onunload = function (){
  	alert('asd');
}
</script>
</head>

<body>
<?php
	session_start();
	echo $_SESSION['Diem'];
?>
</body>
</html>

