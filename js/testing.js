<!-- Javascript đếm giờ cho bài làm -->
    <script>
        var m=120;
        var s=0;
        var made = document.getElementById("made").innerHTML;
        //lấy số thời gian còn lại trong localStorage của trình duyệt
		if(localStorage.getItem("minutes-left"))
		{
			var m = localStorage.getItem("minutes-left");
			var s = localStorage.getItem("seconds-left");
		}
        var timeout=null;
		window.onload = start(); //khi page vừa được load thì bộ đếm sẽ chạy ngay lập tức

		//Khi nộp bài thì sẽ có hành động click nào nút submit-test trong form load câu hỏi
		function nopbaiDoc() {
			var subm = confirm("Bạn có chắc chắn muốn nộp phần ĐỌC? Bạn sẽ không thể sửa lại sau khi nộp!");
			if(subm == true)
			{
				document.getElementById('submit-test').click();
				saveCurrentTimer(); //Lưu thời gian còn lại vào localStorage
				//document.location.href = "../ToeicThi/View/Exam/TOEIC-"+made+"/Toeic-"+made+"-testing-2.html";
			}
			else
				return;
		}
		function nopbaiNghe() {
			var subm = confirm("Bạn có chắc chắn muốn nộp phần NGHE để kết thúc bài thi?");
			if(subm == true)
			{
				document.getElementById('submit-test').click();
				localStorage.clear();
				//document.location.href = "../ToeicThi/View/Exam/TOEIC-"+made+"/XemDiem-"+made+".html";
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
