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

<?php include "header.php"?>

<main class="main oh" id="main">
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

    <!-- footer -->
    <?php include "footer.php"?>
    <!-- end footer -->

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