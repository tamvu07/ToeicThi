<?php
	require_once("../Controller/controller_lambaithi.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="../TOEIC-upload/swfobject/swfobject.js"></script>
</head>

<body>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="100" id="flashContent">
				<param name="movie" value="../TOEIC-upload/swf/mp3_test.swf" />
				<param name="flashvars" value="mp3url=../TOEIC-upload/MP3/listening1.mp3&amp;timesToPlay=2&amp;showPlay=true&amp;waitToPlay=true&amp;showID3=true&amp;addHttp=false" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="../TOEIC-upload/swf/mp3_test.swf" width="300" height="40">
					<param name="flashvars" value="mp3url=../TOEIC-upload/MP3/listening1.mp3&amp;timesToPlay=2&amp;showPlay=true&amp;waitToPlay=true&amp;showID3=true&amp;addHttp=false" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflashplayer">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>

	<?php
		session_start();
		$loaicauhoi = 'R';
		$made = 1;
		$p = new controller_lambaithi();
		$p->test_get_list_questions($loaicauhoi,$made); // in ra câu hỏi và trắc nghiệm
		if(isset($_POST['submit-test']))
		{
			$p->count_scores($loaicauhoi,$made); // tính điểm dựa trên số câu người dùng chọn (tạm thời: 1 câu đúng 5đ)
		}
	?>
</body>
</html>