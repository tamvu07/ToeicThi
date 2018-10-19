<html>
<head>
    <link rel="stylesheet" href="css/Thanh-Style-testing.css"/>
</head>
<body>
    <div id="container-test">
    <div id="test-title" class="col-md-8">
    <h1>ĐỀ THI THỬ TOEIC SỐ <?= $_GET['id'] ?></h1>
    <div id="countdown-timer"><span id="m" name="m">120</span>:<span id="s" name="s">00</span></div>
    </div>
    <div id="main-contain-test" class="col-md-8">
        <?php
				require_once("../Controller/controller_lambaithi.php");
				if(isset($_GET['id']))
				{
					$made = $_GET['id'];
					$loaicauhoi = 'R';
					$p = new controller_lambaithi();
					$p->test_get_list_questions($loaicauhoi,$made); // in ra câu hỏi và trắc nghiệm
					if(isset($_POST['submit-test']))
					{
					$p->count_reading_scores($loaicauhoi,$made); // tính điểm dựa trên số câu người dùng chọn
					}
				}
				
			?>
    </div>
    <center><button id="test-bottom" class="col-md-8" onClick="nopbai();">Nộp bài</button></center>
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
		function nopbai() {
			var subm = confirm("Bạn có chắc chắn muốn nộp phần này?");
			if(subm == true)
			{
				document.getElementById('submit-test').click();
				saveCurrentTimer(); //Lưu thời gian còn lại vào localStorage
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
		}

		//Bắt đầu thực hiện hành động đếm giờ
        function start(){
			if(s==-1){
				m=m-1;
				s=59;
			}
			if(m==-1)
			{
				clearTimeout(timeout);
				alert('hết giờ, hệ thống dã tự động nộp bài');
				nopbai();
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
