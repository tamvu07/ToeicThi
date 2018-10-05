<?php
session_start();
ob_start();
require_once "../Controller/controller_main.php";
$toeic=new controller_main();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Deus | Toeic Testing</title>
    <base href="<?= BASE_URL ?>">
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:400,600,700%7CRoboto:400,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-icons.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/colors/cyan.css"/>

    <link rel="stylesheet" href="css/Thanh-Style-Login.css"/>

    <link rel="stylesheet" href="css/Thanh-Style-toeic-testing.css"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
</head>

<body class="bg-dark style-music">
<?php include "header.php" ?>
<main class="main oh" id="main">
    <div id="container" class="col-md-6 text-md-center">
        <p>THI THỬ TOEIC</p>
        <div><span id="m">180:</span><span id="s">00</span></div>
        <button  id="countdown" onclick="start()">Bắt đầu đếm</button>
        <br>
        <br>
        <form method="post">
        <div id="question">
            <p>Câu 1: ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?ABC?</p>
        </div>
        </form>
    </div>
</main>
<!-- end main-wrapper -->

<!-- footer -->
<?php
include "footer.php";
ob_end_flush();
?>
<!-- end footer -->

<!-- jQuery Scripts -->
<script src="js/bootstrap.min.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/owl-carousel.min.js"></script>
<script src="js/flickity.pkgd.min.js"></script>
<script src="js/twitterFetcher_min.js"></script>
<script src="js/jquery.newsTicker.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>

<script language="JavaScript">
    var m=180;
    var s=0;
    var timeout=null;
    function start(){
        if(s==-1){
            m=m-1;
            s=59;
        }
        if(m==-1)
        {
            clearTimeout(timeout);
            alert('hết giờ');
            return false;
        }
        document.getElementById('m').innerText = m.toString() + ':';
        document.getElementById('s').innerText = s.toString();
        timeout = setTimeout(function(){
            s--;
            start();
        }, 1000);
        document.getElementById('countdown').setAttribute("disabled","true");
    }

</script>