<?php
session_start();
require_once "../Model/toeic.php";
$toeic = new toiec();
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

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <style>
        .entry .entry__img-holder a img {
            height: 165px;
        }

        #top-sign-in-out {
            position: absolute;
            z-index: 1;
            left: 850px;
            top: 2px;
        }

        #top-sign-in-out a {
            border-radius: 8px;
            margin-left: 5px;
        }

        .modal .modal-dialog .modal-content h4 {
            width: 450px;
            text-align: center;
        }
    </style>
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
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i
                            class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="index.html" class="sidenav__menu-url">Home Default</a></li>
                    <li><a href="index-politics.html" class="sidenav__menu-url">Home Politics</a></li>
                    <li><a href="index-fashion.html" class="sidenav__menu-url">Home Fashion</a></li>
                    <li><a href="index-games.html" class="sidenav__menu-url">Home Games</a></li>
                    <li><a href="index-videos.html" class="sidenav__menu-url">Home Videos</a></li>
                    <li><a href="index.php" class="sidenav__menu-url">Home Music</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Pages</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i
                            class="ui-arrow-down"></i></button>
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
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i
                            class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li>
                        <a href="#" class="sidenav__menu-url">Single Post</a>
                        <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i
                                    class="ui-arrow-down"></i></button>
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
                <!-- Socials -->
                <div class="col-lg-12">
                    <div id="top-sign-in-out">
                        <a class="btn btn-sm btn-light" data-toggle="modal" href="#myModal">
                            <span>Đăng nhập</span>
                        </a>
                        <a href="#" class="btn btn-sm btn-light">
                            <span>Đăng kí</span>
                        </a>
                    </div>

                    <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                        <a class="social social-facebook" href="https://www.facebook.com/" target="_blank"
                           aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter" href="https://www.twitter.com/" target="_blank"
                           aria-label="twitter">
                            <i class="ui-twitter"></i>
                        </a>
                        <a class="social social-google-plus" href="https://www.google.com/" target="_blank"
                           aria-label="google">
                            <i class="ui-google"></i>
                        </a>
                        <a class="social social-youtube" href="https://www.youtube.com/" target="_blank"
                           aria-label="youtube">
                            <i class="ui-youtube"></i>
                        </a>
                        <a class="social social-instagram" href="https://www.instagram.com/" target="_blank"
                           aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a>
                    </div>

                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">ĐĂNG NHẬP</h4>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Email:<input type="text" name="email">
                                    password:<input type="password" name="password">
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button style="border:1px solid red;" type="button" class="btn"
                                            data-dismiss="modal">Đăng nhập
                                    </button>
                                    <button type="button" class="btn" data-dismiss="modal">Hủy bỏ</button>
                                </div>
                            </form>
                        </div>
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
                    <!-- Logo -->
                    <a href="View/" class="logo">
                        <img class="logo__img" src="img/logo_default.png"
                             srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
                    </a>

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">

                            <li class="nav__dropdown active">
                                <a href="index.html">Trang chủ</a>
                                <ul class="nav__dropdown-menu">
                                    <li><a href="index.html">Home Default</a></li>
                                    <li><a href="index-politics.html">Home Politics</a></li>
                                    <li><a href="index-fashion.html">Home Fashion</a></li>
                                    <li><a href="index-games.html">Home Games</a></li>
                                    <li><a href="index-videos.html">Home Videos</a></li>
                                    <li><a href="index.php">Home Music</a></li>
                                </ul>
                            </li>

                            <li class="nav__dropdown">
                                <a href="#">Bài giảng</a>
                                <ul class="nav__dropdown-menu nav__megamenu">
                                    <li>
                                        <div class="nav__megamenu-wrap">
                                            <div class="row">

                                                <div class="col nav__megamenu-item">
                                                    <article class="entry">
                                                        <div class="entry__img-holder">
                                                            <a href="single-post-music.html">
                                                                <img src="img/layout/grid_1.jpg" alt=""
                                                                     class="entry__img">
                                                            </a>
                                                            <a href="categories.html"
                                                               class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">listening</a>
                                                        </div>
                                                    </article>
                                                </div>

                                                <div class="col nav__megamenu-item">
                                                    <article class="entry">
                                                        <div class="entry__img-holder">
                                                            <a href="single-post-music.html">
                                                                <img src="img/layout/grid_2.jpg" alt=""
                                                                     class="entry__img">
                                                            </a>
                                                            <a href="categories.html"
                                                               class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">reading</a>
                                                        </div>
                                                    </article>
                                                </div>

                                                <div class="col nav__megamenu-item">
                                                    <article class="entry">
                                                        <div class="entry__img-holder">
                                                            <a href="single-post-music.html">
                                                                <img src="img/layout/grid_3.jpg" alt=""
                                                                     class="entry__img">
                                                            </a>
                                                            <a href="categories.html"
                                                               class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">writing</a>
                                                        </div>
                                                    </article>
                                                </div>

                                                <div class="col nav__megamenu-item">
                                                    <article class="entry">
                                                        <div class="entry__img-holder">
                                                            <a href="single-post-music.html">
                                                                <img src="img/layout/grid_4.jpg" alt=""
                                                                     class="entry__img">
                                                            </a>
                                                            <a href="categories.html"
                                                               class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">speaking</a>
                                                        </div>
                                                    </article>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul> <!-- end megamenu -->
                            </li>

                            <li class="nav__dropdown">
                                <a href="#">Test</a>
                                <ul class="nav__dropdown-menu">
                                    <li><a href="about.html">Listening</a></li>
                                    <li><a href="contact.html">Reading</a></li>
                                    <li><a href="search-results.html">Writing</a></li>
                                    <li><a href="categories.html">Speaking</a></li>
                                </ul>
                            </li>

                            <li class="nav__dropdown">
                                <a href="#">Features</a>
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
                                <a href="#">Liên hệ</a>
                            </li>

                            <li>
                                <a href="#">giới thiệu</a>
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

    <!-- Hero Slider -->
    <section class="hero-slider-1">
        <div id="flickity-hero" class="carousel-main">

            <div class="carousel-cell hero-slider-1__item">
                <article class="hero-slider-1__entry entry">
                    <div class="hero-slider-1__thumb-img-holder"
                         style="background-image: url(img/layout/hero_1.jpg)">
                        <div class="bottom-gradient"></div>
                    </div>
                    <div class="hero-slider-1__thumb-text-holder">
                        <div class="container">
                            <h2 class="hero-slider-1__entry-title">
                                <a href="single-post-music.html">abc</a>
                            </h2>
                        </div>
                    </div>
                </article>
            </div>

            <div class="carousel-cell hero-slider-1__item">
                <article class="hero-slider-1__entry entry">
                    <div class="hero-slider-1__thumb-img-holder"
                         style="background-image: url(img/layout/hero_2.jpg)">
                        <div class="bottom-gradient"></div>
                    </div>
                    <div class="hero-slider-1__thumb-text-holder">
                        <div class="container">
                            <h2 class="hero-slider-1__entry-title">
                                <a href="single-post-music.html">abc</a>
                            </h2>
                        </div>
                    </div>
                </article>
            </div>

            <div class="carousel-cell hero-slider-1__item">
                <article class="hero-slider-1__entry entry">
                    <div class="hero-slider-1__thumb-img-holder"
                         style="background-image: url(img/layout/hero_3.jpg)">
                        <div class="bottom-gradient"></div>
                    </div>
                    <div class="hero-slider-1__thumb-text-holder">
                        <div class="container">
                            <h2 class="hero-slider-1__entry-title">
                                <a href="single-post-music.html">abc</a>
                            </h2>
                        </div>
                    </div>
                </article>
            </div>

            <div class="carousel-cell hero-slider-1__item">
                <article class="hero-slider-1__entry entry">
                    <div class="hero-slider-1__thumb-img-holder"
                         style="background-image: url(img/layout/hero_4.jpg)">
                        <div class="bottom-gradient"></div>
                    </div>
                    <div class="hero-slider-1__thumb-text-holder">
                        <div class="container">
                            <h2 class="hero-slider-1__entry-title">
                                <a href="single-post-music.html">abc</a>
                            </h2>
                        </div>
                    </div>
                </article>
            </div>
        </div> <!-- end flickity -->

        <!-- Slider thumbs -->
        <div class="carousel-thumbs-holder">
            <div class="container">
                <div id="flickity-thumbs" class="carousel-thumbs">
                    <div class="carousel-cell">
                        <div class="carousel-thumbs__item">
                            <div class="carousel-thumbs__img-holder">
                                <img src="img/layout/hero_1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-thumbs__item">
                            <div class="carousel-thumbs__img-holder">
                                <img src="img/layout/hero_2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-thumbs__item">
                            <div class="carousel-thumbs__img-holder">
                                <img src="img/layout/hero_3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-thumbs__item">
                            <div class="carousel-thumbs__img-holder">
                                <img src="img/layout/hero_4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end hero slider -->

    <div class="main-container container content-box content-box--pt-108" id="main-container">

        <!-- Upcoming Events -->
        <section class="section mb-0">
            <div class="title-wrap title-wrap--line title-wrap--pr">
                <h3 class="section-title">Upcoming Events</h3>
            </div>

            <!-- Slider -->
            <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                <article class="entry card card--1">
                    <div class="entry__img-holder card__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-70">
                                <img data-src="img/content/carousel/carousel_post_13.jpg" src="img/empty.png"
                                     class="entry__img lazyload" alt=""/>
                                <div class="entry-date-label">
                                    <div class="entry-date-label__weekday">thu</div>
                                    <div class="entry-date-label__day">23</div>
                                    <div class="entry-date-label__month">aug</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="entry__body card__body">
                        <div class="entry__header">
                            <ul class="entry__meta">
                                <li class="entry__meta-category">
                                    <a href="#">Festivals</a>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="single-post-music.html">ROMANCING THE CLASSICS - PPO 35th Concert Season
                                    2017–2018</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">DeoThemes</a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>

                    </div>
                </article>
                <article class="entry card card--1">
                    <div class="entry__img-holder card__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-70">
                                <img data-src="img/content/carousel/carousel_post_14.jpg" src="img/empty.png"
                                     class="entry__img lazyload" alt=""/>
                                <div class="entry-date-label">
                                    <div class="entry-date-label__weekday">wed</div>
                                    <div class="entry-date-label__day">29</div>
                                    <div class="entry-date-label__month">aug</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="entry__body card__body">
                        <div class="entry__header">
                            <ul class="entry__meta">
                                <li class="entry__meta-category">
                                    <a href="#">Festivals</a>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="single-post-music.html">FOUR - An Anniversary Show, With Special Guest "BEN
                                    &amp; BEN"</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">DeoThemes</a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>

                    </div>
                </article>
                <article class="entry card card--1">
                    <div class="entry__img-holder card__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-70">
                                <img data-src="img/content/carousel/carousel_post_15.jpg" src="img/empty.png"
                                     class="entry__img lazyload" alt=""/>
                                <div class="entry-date-label">
                                    <div class="entry-date-label__weekday">sat</div>
                                    <div class="entry-date-label__day">15</div>
                                    <div class="entry-date-label__month">aug</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="entry__body card__body">
                        <div class="entry__header">
                            <ul class="entry__meta">
                                <li class="entry__meta-category">
                                    <a href="#">Concerts</a>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="single-post-music.html">Tickets For Sam Smith's Show in Manila in October
                                    Go On
                                    Sale Next Week!</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">DeoThemes</a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>

                    </div>
                </article>
                <article class="entry card card--1">
                    <div class="entry__img-holder card__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-70">
                                <img data-src="img/content/carousel/carousel_post_14.jpg" src="img/empty.png"
                                     class="entry__img lazyload" alt=""/>
                                <div class="entry-date-label">
                                    <div class="entry-date-label__weekday">wed</div>
                                    <div class="entry-date-label__day">29</div>
                                    <div class="entry-date-label__month">aug</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="entry__body card__body">
                        <div class="entry__header">
                            <ul class="entry__meta">
                                <li class="entry__meta-category">
                                    <a href="#">Festivals</a>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="single-post-music.html">FOUR - An Anniversary Show, With Special Guest "BEN
                                    &amp; BEN"</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">DeoThemes</a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>

                    </div>
                </article>
            </div> <!-- end slider -->

        </section> <!-- end upcoming events -->


        <!-- Ad Banner 970 -->
        <div class="text-center pb-48">
            <a href="#">
                <img src="img/content/placeholder_970_1.jpg" alt="">
            </a>
        </div>

        <!-- Newest Videos -->
        <section class="pb-32">
            <div class="title-wrap title-wrap--line">
                <h2 class="section-title">newest videos</h2>
            </div>
            <div class="video-playlist">

                <div class="video-playlist__content thumb-container">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/E0wW9RwpG7M?feature=oembed"
                                class="video-playlist__content-video">
                        </iframe>
                    </div>
                </div>

                <div class="video-playlist__list">
                    <a href="https://www.youtube.com/embed/E0wW9RwpG7M?feature=oembed&autoplay=1"
                       class="video-playlist__list-item video-playlist__list-item--active">
                        <div class="video-playlist__list-item-thumb">
                            <img data-src="https://i.ytimg.com/vi/E0wW9RwpG7M/default.jpg"
                                 src="https://i.ytimg.com/vi/E0wW9RwpG7M/default.jpg"
                                 class="video-playlist__list-item-img lazyload" alt="">
                        </div>
                        <div class="video-playlist__list-item-description">
                            <h4 class="video-playlist__list-item-title">Heaven - Bryan Adams (cover) Megan Nicole
                                and
                                Boyce Avenue</h4>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/embed/7TWkmy5ELJc?feature=oembed&autoplay=1"
                       class="video-playlist__list-item">
                        <div class="video-playlist__list-item-thumb">
                            <img data-src="https://i.ytimg.com/vi/7TWkmy5ELJc/default.jpg"
                                 src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg"
                                 class="video-playlist__list-item-img lazyload" alt="">
                        </div>
                        <div class="video-playlist__list-item-description">
                            <h4 class="video-playlist__list-item-title">Santa Cruz - Young Blood Rising (Official
                                Music
                                Video)</h4>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/embed/hXnMSaK6C2w?feature=oembed&autoplay=1"
                       class="video-playlist__list-item">
                        <div class="video-playlist__list-item-thumb">
                            <img data-src="https://i.ytimg.com/vi/hXnMSaK6C2w/default.jpg"
                                 src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg"
                                 class="video-playlist__list-item-img lazyload" alt="">
                        </div>
                        <div class="video-playlist__list-item-description">
                            <h4 class="video-playlist__list-item-title">Cardi B - Bartier Cardi (feat. 21 Savage)
                                [Official Video]</h4>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/embed/xMTsul4UFl8?feature=oembed&autoplay=1"
                       class="video-playlist__list-item">
                        <div class="video-playlist__list-item-thumb">
                            <img data-src="https://i.ytimg.com/vi/xMTsul4UFl8/default.jpg"
                                 src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg"
                                 class="video-playlist__list-item-img lazyload" alt="">
                        </div>
                        <div class="video-playlist__list-item-description">
                            <h4 class="video-playlist__list-item-title">Nothing Makes Sense Anymore (Official Video)
                                -
                                Mike Shinoda</h4>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/embed/2Vv-BfVoq4g?feature=oembed&autoplay=1"
                       class="video-playlist__list-item">
                        <div class="video-playlist__list-item-thumb">
                            <img data-src="https://i.ytimg.com/vi/2Vv-BfVoq4g/default.jpg"
                                 src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg"
                                 class="video-playlist__list-item-img lazyload" alt="">
                        </div>
                        <div class="video-playlist__list-item-description">
                            <h4 class="video-playlist__list-item-title">Ed Sheeran - Perfect (Official Music
                                Video)</h4>
                        </div>
                    </a>
                </div>

            </div>
        </section> <!-- end newest videos -->

        <!-- Most Popular -->
        <section class="section mb-24">
            <div class="title-wrap title-wrap--line">
                <h3 class="section-title">Most Popular</h3>
            </div>
            <div class="row row-20">
                <div class="col-md-3">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="single-post-music.html">
                                <div class="thumb-container thumb-65">
                                    <img data-src="img/content/grid/grid_post_33.jpg" src="img/empty.png"
                                         class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="single-post-music.html">'American Idol': How the Show's Inclusive New
                                        Season Reflects the Country's Progress</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="entry thumb thumb--size-3 thumb--mb-20">
                        <div class="entry__img-holder thumb__img-holder"
                             style="background-image: url('img/content/grid/grid_post_34.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder thumb-text-holder--2">
                                <ul class="entry__meta">
                                    <li>
                                        <a href="#" class="entry__meta-category">politics</a>
                                    </li>
                                </ul>
                                <h2 class="thumb-entry-title">
                                    <a href="single-post-music.html">Jack, Chris &amp; More to Headline 2018
                                        Pilgrimage
                                        Festival</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-views">
                                        <i class="ui-eye"></i>
                                        <span>1356</span>
                                    </li>
                                    <li class="entry__meta-comments">
                                        <a href="#">
                                            <i class="ui-chat-empty"></i>13
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="single-post-music.html" class="thumb-url"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-3">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="single-post-music.html">
                                <div class="thumb-container thumb-65">
                                    <img data-src="img/content/grid/grid_post_35.jpg" src="img/empty.png"
                                         class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="single-post-music.html">Zedd, Maren Morris &amp; Grey's 'The Middle'
                                        Hits
                                        No. 1 on Pop Songs Airplay Chart</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row row-20">
                <div class="col-md-6">
                    <article class="entry thumb thumb--size-3 thumb--mb-20">
                        <div class="entry__img-holder thumb__img-holder"
                             style="background-image: url('img/content/grid/grid_post_36.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder thumb-text-holder--2">
                                <ul class="entry__meta">
                                    <li>
                                        <a href="#" class="entry__meta-category">politics</a>
                                    </li>
                                </ul>
                                <h2 class="thumb-entry-title">
                                    <a href="single-post-music.html">WATCH Suprise Performance, Shoots Whiskey at
                                        Nashville’s Bluebird Cafe</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-views">
                                        <i class="ui-eye"></i>
                                        <span>1356</span>
                                    </li>
                                    <li class="entry__meta-comments">
                                        <a href="#">
                                            <i class="ui-chat-empty"></i>13
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="single-post-music.html" class="thumb-url"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-3">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="single-post-music.html">
                                <div class="thumb-container thumb-65">
                                    <img data-src="img/content/grid/grid_post_37.jpg" src="img/empty.png"
                                         class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="single-post-music.html">Download Festival Rocks Melbourne, Prepares to
                                        Expand in 2019</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-3">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="single-post-music.html">
                                <div class="thumb-container thumb-65">
                                    <img data-src="img/content/grid/grid_post_38.jpg" src="img/empty.png"
                                         class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="single-post-music.html">Meghan Trainor and 'Queer Eye' Cast Team Up for
                                        Spotify Takeover: Listen</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section> <!-- end most popular -->

        <!-- Featured Albums -->
        <section class="section mb-0">
            <div class="title-wrap title-wrap--line title-wrap--pr">
                <h3 class="section-title">featured albums</h3>
            </div>

            <!-- Slider -->
            <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder"
                         style="background-image: url('img/content/carousel/carousel_post_16.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="single-post-music.html">Meghan Trainor and 'Queer Eye' Cast Team Up for
                                    Spotify
                                    Takeover: Listen</a>
                            </h2>
                        </div>
                        <a href="single-post-music.html" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder"
                         style="background-image: url('img/content/carousel/carousel_post_17.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="single-post-music.html">Jack, Chris &amp; More to Headline 2018 Pilgrimage
                                    Festival</a>
                            </h2>
                        </div>
                        <a href="single-post-music.html" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder"
                         style="background-image: url('img/content/carousel/carousel_post_18.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="single-post-music.html"> 9 Standout moments of Demi Lovato’s Tell Me
                                    You</a>
                            </h2>
                        </div>
                        <a href="single-post-music.html" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder"
                         style="background-image: url('img/content/carousel/carousel_post_19.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="single-post-music.html">Which Artist Is Dominating 2018 So Far? Vote!</a>
                            </h2>
                        </div>
                        <a href="single-post-music.html" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder"
                         style="background-image: url('img/content/carousel/carousel_post_17.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="single-post-music.html">Jack, Chris &amp; More to Headline 2018 Pilgrimage
                                    Festival</a>
                            </h2>
                        </div>
                        <a href="single-post-music.html" class="thumb-url"></a>
                    </div>
                </article>
            </div> <!-- end slider -->

        </section> <!-- end featured albums -->

    </div> <!-- end main container -->

    <!-- Footer -->
    <footer class="footer footer--dark footer--bg-img"
            style="background-image: url('img/content/footer/footer_bg_img.jpg');">
        <div class="container">
            <div class="footer__widgets">
                <div class="footer__widgets-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-4">
                            <a href="index.html">
                                <img src="img/logo_default_white.png"
                                     srcset="img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x"
                                     class="logo__img" alt="">
                            </a>
                        </div>

                        <div class="col-md-6">
                            <div class="socials socials--large socials--nobase justify-content-md-end">
                                <a href="#" class="social social-facebook" aria-label="facebook"><i
                                            class="ui-facebook"></i></a>
                                <a href="#" class="social social-twitter" aria-label="twitter"><i
                                            class="ui-twitter"></i></a>
                                <a href="#" class="social social-google-plus" aria-label="google+"><i
                                            class="ui-google"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube"><i
                                            class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram"><i
                                            class="ui-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-2 col-md-6">
                        <aside class="widget widget_nav_menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="single-post-music.html">Projects</a></li>
                                <li><a href="single-post-music.html">Wordpress Themes</a></li>
                                <li><a href="categories.html">Advertise</a></li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <aside class="widget widget-twitter">
                            <h4 class="widget-title">Latest Tweets</h4>
                            <div class="tweets-container">
                                <div id="tweets"></div>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget-popular-posts">
                            <h4 class="widget-title">Most Popular</h4>
                            <ul class="post-list-small post-list-small--1">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-80">
                                                <a href="single-post-music.html">
                                                    <img data-src="img/content/post_small/post_small_46.jpg"
                                                         src="img/empty.png" alt="" class="lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post-music.html">WATCH Suprise Performance, Shoots
                                                    Whiskey at Nashville’s</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-80">
                                                <a href="single-post-music.html">
                                                    <img data-src="img/content/post_small/post_small_47.jpg"
                                                         src="img/empty.png" alt="" class="lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post-music.html">Jack, Chris &amp; More to Headline
                                                    2018
                                                    Pilgrimage Festival</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-80">
                                                <a href="single-post-music.html">
                                                    <img data-src="img/content/post_small/post_small_48.jpg"
                                                         src="img/empty.png" alt="" class="lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post-music.html">Meghan Trainor and 'Queer Eye' Cast
                                                    Team Up for Spotify ...</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_mc4wp_form_widget">
                            <h4 class="widget-title">Newsletter</h4>
                            <p class="newsletter__text">
                                <i class="ui-email newsletter__icon"></i>
                                Subscribe for our daily news
                            </p>
                            <form class="mc4wp-form" method="post">
                                <div class="mc4wp-form-fields">
                                    <div class="form-group">
                                        <input type="email" name="EMAIL" placeholder="Your email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                                    </div>
                                </div>
                            </form>
                        </aside>
                    </div>


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

</main>
<!-- end main-wrapper -->


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