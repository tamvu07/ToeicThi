<link rel="stylesheet" href="css/Thanh-Style-toeic-testing.css"/>

<?php
if (isset($_GET['id'])) $id = $_GET['id'];
?>
<div id="container" class="col-md-6 text-md-center">
    <p>
    <h1>ĐỀ THI THỬ TOEIC SỐ <?= $id ?></h1></p>
    <div id="time">
        <span id="m">180:</span><span id="s">00</span>
    </div>
    <button id="countdown" onclick="start()">Bắt đầu đếm</button>
    <br>
    <br>
    <form method="post">
        <div id="question">
            <p>Câu 1: ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?</p>
        </div>
    </form>
</div>

<script language="JavaScript">
    var m = 180;
    var s = 0;
    var timeout = null;

    function start() {
        if (s == -1) {
            m = m - 1;
            s = 59;
        }
        if (m == -1) {
            clearTimeout(timeout);
            alert('hết giờ');
            return false;
        }
        document.getElementById('m').innerText = m.toString() + ':';
        document.getElementById('s').innerText = s.toString();
        timeout = setTimeout(function () {
            s--;
            start();
        }, 1000);
        document.getElementById('countdown').setAttribute("disabled", "true");
    }

</script>