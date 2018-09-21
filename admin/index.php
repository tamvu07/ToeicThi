<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>TOEIC TEST ONLINE - ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/js/content_load.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Quản Lý
                </a>
            </div>

            <ul class="nav">
                <?php
                    $p = $_GET['a'];
                    echo '<li'. ($p=='' ? ' class="active"' : '').'>
                    <a href="index.php"><i class="pe-7s-home"></i><p>Trang chính</p></a>
                </li>';
                    echo '<li'. ($p=='nguoidung' ? ' class="active"' : '').'>
                    <a href="index.php?a=nguoidung"><i class="pe-7s-user"></i><p>Người dùng</p></a>
                </li>';
                    echo '<li'. ($p=='dethi' ? ' class="active"' : '').'>
                    <a href="index.php?a=dethi"><i class="pe-7s-note2"></i><p>Đề thi</p></a>
                </li>';
                    echo '<li'. ($p=='cauhoi' ? ' class="active"' : '').'>
                    <a href="index.php?a=cauhoi"><i class="pe-7s-news-paper"></i><p>Câu hỏi</p></a>
                </li>';
                    echo '<li'. ($p=='tintuc' ? ' class="active"' : '').'>
                    <a href="index.php?a=tintuc"><i class="pe-7s-sun"></i><p>Tin tức</p></a>
                </li>';
                    echo '<li'. ($p=='thongbao' ? ' class="active"' : '').'>
                    <a href="index.php?a=thongbao"><i class="pe-7s-bell"></i><p>Thông báo</p></a>
                </li>';
                ?>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Xin chào admin!</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">2</span>
                                    
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Thông báo 1</a></li>
                                <li><a href="#">Thông báo 2</a></li>
                                <li><a href="#">Thông báo 3</a></li>
                                <li><a href="#">Thông báo 4</a></li>
                              </ul>
                        </li>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Tùy chọn
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Tùy chọn 1</a></li>
                                <li><a href="#">Tùy chọn 2</a></li>
                                <li><a href="#">Tùy chọn 3</a></li>
                                <li><a href="#">Tùy chọn 4</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Tách tùy chọn</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Đăng xuất</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content" id="content">
            <?php
                $page = $_GET['a'];
                switch($page)
                {
                    case "nguoidung": include("user_list.php"); break;
                    default:  include("dashboard.php"); break;
                }
            ?>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Li1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Li2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Li3
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Li4
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">TOEIC Test Online</a>, Thi thử và đậu thi cử
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

    	});
	</script>

</html>
