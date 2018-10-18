<html>
<head>
    <link rel="stylesheet" href="css/Thanh-Style-testing.css"/>
</head>
<body>
    <div id="container-test">
    <div id="test-title" class="col-md-8">
    <h1>Đề thi mẫu TOEIC Số 1</h1>
    <div id="countdown-timer"><span id="m" name="m">120</span>:<span id="s" name="s">00</span></div>
    </div>
    <div id="main-contain-test" class="col-md-8">
        <?php
				require_once("../Controller/controller_lambaithi.php");
				session_start();
				$loaicauhoi = 'R';
				$made = 1;
				$p = new controller_lambaithi();
				$p->test_get_list_questions($loaicauhoi,$made); // in ra câu hỏi và trắc nghiệm
				if(isset($_POST['submit-test']))
				{
					$p->count_scores($loaicauhoi,$made); // tính điểm dựa trên số câu người dùng chọn
				}
			?>
    </div>
    <center><button id="test-bottom" class="col-md-8" onClick="nopbai();">Nộp bài</button></center>
    </div>
</body>
</html>
    <script>
        var m=120;
        var s=0;
		if(localStorage.getItem("minutes-left"))
		{
			var m = localStorage.getItem("minutes-left");
			var s = localStorage.getItem("seconds-left");
		}
        var timeout=null;
		window.onload = start();
		function nopbai() {
			document.getElementById('submit-test').click();
		}
		function local() {
			var mm = document.getElementById("m").innerHTML;
 			var ss = document.getElementById("s").innerHTML;
			localStorage.setItem("minutes-left",mm);
			localStorage.setItem("seconds-left",ss);
		}
		function getms() {
			var mm = document.getElementById('s').innerHTML;
			document.getElementById("fuckingshit").textContent = mm;
			//alert(get());
			//var ss = document.getElementById('s').innerHTML;
			//document.getElementById('mm').innerHTML = mm.toString();
			//document.getElementById('ss').innerHTML = ss.toString();
		}
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
		window.onbeforeunload=function(){return 'Are you sure you want to leave? PLZ STAY!!!'}
    </script>
