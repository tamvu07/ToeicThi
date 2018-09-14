<?php
session_start();
require_once "Model/toeic.php";
$toeic=new toiec();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOEIC Online</title>
  <script src="js/jquery.min.js"></script>
  <base href="<?=BASE_URL?>/"/>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Rubik:400,600,700%7CRoboto:400,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/colors/cyan.css" />
  <link rel="stylesheet" href="css/my_style.css" />
  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="js/lazysizes.min.js"></script>
</head>

<body class="bg-dark style-music">
  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="#" class="sidenav__menu-url">Home</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="index.php" class="sidenav__menu-url">Home Default</a></li>
            <li><a href="index-politics.html" class="sidenav__menu-url">Home Politics</a></li>
            <li><a href="index-fashion.html" class="sidenav__menu-url">Home Fashion</a></li>
            <li><a href="index-games.html" class="sidenav__menu-url">Home Games</a></li>
            <li><a href="index-videos.html" class="sidenav__menu-url">Home Videos</a></li>
            <li><a href="index-music.html" class="sidenav__menu-url">Home Music</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="about.html" class="sidenav__menu-url">About</a></li>
            <li><a href="contact.html" class="sidenav__menu-url">Contact</a></li>
            <li><a href="search-results.html" class="sidenav__menu-url">Search Results</a></li>
            <li><a href="categories.html" class="sidenav__menu-url">Categories</a></li>
            <li><a href="404.html" class="sidenav__menu-url">404</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Features</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li>
              <a href="#" class="sidenav__menu-url">Single Post</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li><a href="single-post.html" class="sidenav__menu-url">Style 1</a></li>
                <li><a href="single-post-politics.html" class="sidenav__menu-url">Style 2</a></li>
                <li><a href="single-post-fashion.html" class="sidenav__menu-url">Style 3</a></li>
                <li><a href="single-post-games.html" class="sidenav__menu-url">Style 4</a></li>
                <li><a href="single-post-videos.html" class="sidenav__menu-url">Style 5</a></li>
                <li><a href="single-post-music.html" class="sidenav__menu-url">Style 6</a></li>
              </ul>
            </li>
            <li><a href="shortcodes.html" class="sidenav__menu-url">Shortcodes</a></li>
          </ul>
        </li>        

        <!-- Categories -->
        <li>
          <a href="#" class="sidenav__menu-url">World</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Business</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Fashion</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Lifestyle</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Advertise</a>
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials"> 
      <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->

  <main class="main oh" id="main">

    <!-- Top Bar -->
     <div class="top-bar d-none d-lg-block">
      <div class="container">
        <div class="row">

          <!-- Top menu -->
          <div class="col-lg-6">
          </div>
          
          <!-- Socials -->
          <div class="col-lg-6">   
              <div class="socials nav__socials justify-content-end">  
                  <ul class="top-menu">
                    <?php
                      if(!isset($_SESSION['USER']))
                      {
                        echo "<li><a href='index.php?page=dangnhap' class='m_a_top_menu' >Đăng Nhập</a></li>
                              <li><a href='index.php?page=dangky' class='m_a_top_menu_2' >Đăng Ký</a></li>";
                      }
                      else
                      {
                        echo "<li><a href='?page=thongtin' class='m_a_top_menu' >Xin Chào ".$_SESSION['TEN']."</a></li>
                              <li><a href='?page=dangxuat' class='m_a_top_menu_2' >Đăng xuất</a></li>";
                      }
                    ?>
                                 
                </ul>     
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- end top bar -->        

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> 

            <!-- Logo -->
            <a href="index.php" class="logo">
              <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="nav__dropdown active">
                  <a href="trangchu.php">Trang Chủ</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="trangchu.php">Home </a></li>
                    <li><a href="?page=dangnhap">Home 2</a></li>
                    <li><a href="?page=dangky">Home 3</a></li>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="#">Test</a>
                  <ul class="nav__dropdown-menu nav__megamenu">
                    <li>
                      <div class="nav__megamenu-wrap">
                        <div class="row">

                          <div class="col nav__megamenu-item">
                            <article class="entry">
                              <div class="entry__img-holder">
                                <a href="single-post-music.html">
                                  <img src="img/content/grid/grid_post_1.jpg" alt="" class="entry__img">
                                </a>
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                              </div>

                              <div class="entry__body">   
                                <h2 class="entry__title">
                                  <a href="single-post-music.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                </h2>
                              </div>
                            </article>
                          </div>

                          <div class="col nav__megamenu-item">
                            <article class="entry">
                              <div class="entry__img-holder">
                                <a href="single-post-music.html">
                                  <img src="img/content/grid/grid_post_2.jpg" alt="" class="entry__img">
                                </a>
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                              </div>

                              <div class="entry__body">   
                                <h2 class="entry__title">
                                  <a href="single-post-music.html">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                </h2>
                              </div>
                            </article>
                          </div>

                          <div class="col nav__megamenu-item">
                            <article class="entry">
                              <div class="entry__img-holder">
                                <a href="single-post-music.html">
                                  <img src="img/content/grid/grid_post_3.jpg" alt="" class="entry__img">
                                </a>
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">business</a>
                              </div>

                              <div class="entry__body">   
                                <h2 class="entry__title">
                                  <a href="single-post-music.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                </h2>
                              </div>
                            </article>
                          </div>

                          <div class="col nav__megamenu-item">
                            <article class="entry">
                              <div class="entry__img-holder">
                                <a href="single-post-music.html">
                                  <img src="img/content/grid/grid_post_4.jpg" alt="" class="entry__img">
                                </a>
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                              </div>

                              <div class="entry__body">   
                                <h2 class="entry__title">
                                  <a href="single-post-music.html">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                </h2>
                              </div>
                            </article>
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul> <!-- end megamenu -->
                </li>

                <li class="nav__dropdown">
                  <a href="#">Xem Lai Bai Test</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="categories.html">Categories</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                </li>                

                <li class="nav__dropdown">
                  <a href="#">Liên Hệ</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li class="nav__dropdown">
                      <a href="#">Single Post</a>
                      <ul class="nav__dropdown-menu">
                        <li><a href="single-post.html">Style 1</a></li>
                        <li><a href="single-post-politics.html">Style 2</a></li>
                        <li><a href="single-post-fashion.html">Style 3</a></li>
                        <li><a href="single-post-games.html">Style 4</a></li>
                        <li><a href="single-post-videos.html">Style 5</a></li>
                        <li><a href="single-post-music.html">Style 6</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#">Purchase</a>
                </li>


              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right">

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form">
                    <input type="text" placeholder="Search an article" class="nav__search-input">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>                
              </div>             

            </div> <!-- end nav right -->            
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->



 <!-- start container-->
 <!-- bat dau xu ly noi dung -->

 
  <div class="main-container container content-box content-box--pt-108" id="main-container">

<?php
  $page="";
  if(isset($_GET["page"]))
  {
    $page=$_GET["page"];
  }
  switch($page)
  {
    case "dangnhap":
      include("noidung_dangnhap.php");
      break;
    case "dangky":
      include("noidung_dangky.php");
      break;
    case "dangky_thanhcong":
      include("dangky_thanhcong.html");
      break;
    case "dangxuat":
      include("logout.php");
      break;
    default:
      include("noidung_trangchu.php");
      break;
  }
?>
     
  </div>
<!--end container-->
<!-- ket thuc xu ly noi dung -->
    <!-- Footer -->
    <footer class="footer footer--dark footer--bg-img" style="background-image: url('img/content/footer/footer_bg_img.jpg');">
      <div class="container">
        <div class="footer__widgets">
          <div class="footer__widgets-top">
           
          </div>
          
          <div class="row">

           
           
         



          </div> <!-- end row -->
        </div> <!-- end footer widgets -->
      </div> <!-- end container -->

      <div class="footer__bottom footer__bottom--dark">
        <div class="container text-center">
          <ul class="footer__nav-menu footer__nav-menu--1">
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">News</a></li>
            <li><a href="categories.html">Advertise</a></li>
            <li><a href="shortcodes.html">Support</a></li>
            <li><a href="shortcodes.html">Contact</a></li>
          </ul>
          <p class="copyright">
            © 2018 Deus | Made by <a href="https://deothemes.com">DeoThemes</a>
          </p>   
        </div>            
      </div> <!-- end footer bottom -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->

  
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