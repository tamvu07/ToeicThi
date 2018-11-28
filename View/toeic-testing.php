<html>
<head>
    <link rel="stylesheet" href="css/Thanh-Style-testing.css"/>
    <?php
    	if(!isset($_SESSION['login_id']))
    		header("location:../../../View/Login.html");
    ?>
</head>
<body>

    <div id="container-test">
    <div id="test-title" class="col-md-8">
    <h1>ĐỀ THI THỬ TOEIC SỐ <span id="made"><?= $_GET['id'] ?></span></h1>
    <div id="countdown-timer"><span id="m" name="m">120</span>:<span id="s" name="s">00</span></div>
    </div>
    <?php
    	//Nếu đang ở phần nghe (part=1) thì load file MP3 lên
    	if($_GET['part']==1)
    		{
    			$denghe = $_GET['id'];
    ?>
    <div id="mp3-player" class="col-md-8">
    	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="100" id="flashContent">
				<param name="movie" value="TOEIC-upload/swf/mp3_test.swf" />
				<param name="flashvars" value="mp3url=TOEIC-upload/MP3/listening<?php echo $denghe; ?>.mp3&amp;timesToPlay=2&amp;showPlay=true&amp;waitToPlay=true&amp;showID3=true&amp;addHttp=false" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="TOEIC-upload/swf/mp3_test.swf" width="600" height="33">
					<param name="flashvars" value="mp3url=TOEIC-upload/MP3/listening<?php echo $denghe; ?>.mp3&amp;timesToPlay=2&amp;showPlay=true&amp;waitToPlay=true&amp;showID3=true&amp;addHttp=false" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflashplayer">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
    </div>
    <?php
    	}
    ?>
    <div id="main-contain-test" class="col-md-8">
        <?php
				require_once("../Controller/controller_lambaithi.php");
				if($_GET['part']==1)
				{
					$phan = 'Nghe';
					$loaicauhoi = 'L';
				}
				else
				{
					$phan = 'Đọc';
					$loaicauhoi = 'R';
				}
				if(isset($_GET['id']))
				{
					$made = $_GET['id'];
					$p = new controller_lambaithi();
					echo '<form method="post">';
					$p->test_get_list_questions($loaicauhoi,$made); // in ra câu hỏi và trắc nghiệm
					echo '<button type="submit" id="submit-test" name="submit-test" class="disabled-button"></button>
					</form>';
					if(isset($_POST['submit-test']))
					{
						// tính điểm dựa trên số câu người dùng chọn và theo cấu trúc chuẩn TOEIC
						if($_GET['part']==1)
							$p->count_listening_scores($loaicauhoi,$made);
						else
							$p->count_reading_scores($loaicauhoi,$made);
					}
				}

			?>
    </div>
    <center>
    	<?php
    		if($_GET['part']==1)
    			echo '<button id="test-bottom" class="col-md-8" onClick="nopbaiNghe();">Nộp bài phần NGHE </button>';
    		else
    			echo '<button id="test-bottom" class="col-md-8" onClick="nopbaiDoc();">Nộp bài phần ĐỌC </button>';

		if(!isset($_SESSION['Diem-Listening']) && $_GET['part']==2) //nếu chưa có điểm nghe mà truy cập phần đọc
			header("location:Toeic-testing-1.html");
		if(isset($_SESSION['Diem-Listening']) && $_GET['part']==1) //nếu đã có điểm nghe mà vẫn ở trang thi nghe
			header("location:Toeic-testing-2.html");
		if(isset($_SESSION['Diem-Reading']) && isset($_SESSION['Diem-Listening'])) //nếu đã có cả hai điểm trong session
			header("location:XemDiem.html")
    	?>
    </center>
    </div>
    </div>
</body>
</html>

	<!-- Javascript đếm giờ cho bài làm -->
    <script>
        var m=120;
        var s=0;
        //lấy số thời gian còn lại trong localStorage của trình duyệt
		if(localStorage.getItem("minutes-left"))
		{
			var m = localStorage.getItem("minutes-left");
			var s = localStorage.getItem("seconds-left");
		}
        var timeout=null;
		window.onload = start(); //khi page vừa được load thì bộ đếm sẽ chạy ngay lập tức

		//Khi nộp bài thì sẽ có hành động click nào nút submit-test trong form load câu hỏi
		function nopbaiNghe() {
			var subm = confirm("Bạn có chắc chắn muốn nộp phần NGHE? Bạn sẽ không thể sửa lại sau khi nộp!");
			if(subm == true)
			{
				document.getElementById('submit-test').click();
				saveCurrentTimer(); //Lưu thời gian còn lại vào localStorage
			}
			else
				return;
		}
		function nopbaiNghe_force() {
			document.getElementById('submit-test').click();
			saveCurrentTimer();
		}
		function nopbaiDoc() {
			var subm = confirm("Bạn có chắc chắn muốn nộp phần ĐỌC để kết thúc bài thi?");
			if(subm == true)
			{
				document.getElementById('submit-test').click();
				localStorage.clear();
			}
			else
				return;
		}

		//Lưu thời gian còn lại vào localStorage
		function saveCurrentTimer() {
			var mm = document.getElementById("m").innerHTML;
 			var ss = document.getElementById("s").innerHTML;
			localStorage.setItem("minutes-left",mm);
			localStorage.setItem("seconds-left",ss);
			localStorage.setItem("listening-tested",1);
		}

		//Bắt đầu thực hiện hành động đếm giờ
        function start(){
			if(s==-1){
				m=m-1;
				s=59;
			}
			if(m==74 && s==59)
			{
				if(!localStorage.getItem("listening-tested"))
				{
					alert('Hết giờ phần thi NGHE, hệ thống tự động nộp bài!');
					nopbaiNghe_force();
				}
			}
			if(m==-1)
			{
				clearTimeout(timeout);
				alert('hết giờ, hệ thống dã tự động nộp bài');
				nopbaiDoc();
			}
			if(m < 10)
				document.getElementById('m').innerText = '0' + m.toString();
			else
				document.getElementById('m').innerText = m.toString();
			if(s < 10)
				document.getElementById('s').innerText = '0' + s.toString();
			else
				document.getElementById('s').innerText = s.toString();
			timeout = setTimeout(function(){
				s--;
				start();
			}, 1000);
    	}
    </script>







