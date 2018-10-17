<?php
session_start();
ob_start();
require_once "../Controller/controller_main.php";
$toeic=new controller_main();
if (isset($_GET['p']))
    $p = $_GET['p'];
if (!isset($_SESSION['login_id']) && $_SERVER['REQUEST_URI']!="/ToeicThi/View/Login.html" && $_SERVER['REQUEST_URI']!="/ToeicThi/View/Register.html"){
    $_SESSION['back']=str_replace("localhost/ToeicThi/View/","",$_SERVER['REQUEST_URI']);
}
$toeic->kiemtra_Login();
// if(isset($_SESSION['login_id'])) echo "<p>".$_SESSION['login_email']."</p>";
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
    <link rel="stylesheet" href="css/Thanh-Style-Header.css"/>
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
</head>

<body class="bg-dark style-music">

<!-- đoạn script của FB dùng để tải bộ SDK đăng nhập = facebook -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '{your-app-id}',
            cookie     : true,
            xfbml      : true,
            version    : '{api-version}'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- end đăng nhập = facebook -->
<?php include "header.php" ?>
<main class="main oh" id="main">

<?php
if(isset($_GET['p'])){
    $p=$_GET['p'];
    switch($p)
    {
        case "login": include("login.php"); break;
        case "register": include("Register.php"); break;
        case "contact": include("contact.php"); break;
        case "testing": include("testing.php"); break;
        case "toeic-testing": include "toeic-testing.php";break;
        case "exam": include "examList.php";break;
        case "policy": include "policy.php";break;
        default: include("main.php"); break;
    }
}
else include "main.php";
?>

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