var m = 120;
var s = 0;
var timeout = null;
window.onload = start(); //khi page vừa được load thì bộ đếm sẽ chạy ngay lập tức

//lấy số thời gian còn lại trong localStorage của trình duyệt
if (localStorage.getItem("minutes-left")) {
    var m = localStorage.getItem("minutes-left");
    var s = localStorage.getItem("seconds-left");
}

function submiteTest() {
    if (confirm("Bạn có chắc chắn muốn nộp bài để kết thúc phần dự thi?")) {
        $(document).ready(function () {
            $("#submit-test").click();
        })
        localStorage.clear();
    }
    else
        return 0;
}

//Lưu thời gian còn lại vào localStorage
function saveCurrentTimer() {
    var mm = document.getElementById("m").innerHTML;
    var ss = document.getElementById("s").innerHTML;
    localStorage.setItem("minutes-left", mm);
    localStorage.setItem("seconds-left", ss);
}

//Bắt đầu thực hiện hành động đếm giờ
function start() {
    if (s == -1) {
        m = m - 1;
        s = 59;
    }
    if (m == -1) {
        clearTimeout(timeout);
        alert('hết giờ, hệ thống dã tự động nộp bài');
        submiteTest();
    }
    if (m < 10)
        document.getElementById('m').innerText = '0' + m.toString();
    else
        document.getElementById('m').innerText = m.toString();
    if (s < 10)
        document.getElementById('s').innerText = '0' + s.toString();
    else
        document.getElementById('s').innerText = s.toString();
    timeout = setTimeout(function () {
        s--;
        start();
    }, 1000);
}



function playAudio(){
    var x = document.getElementById('myAudio');
    x.play();
    document.getElementById('listen-btn').disabled=true;
}
