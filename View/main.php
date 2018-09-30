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

<!-- Main Container -->
<div class="main-container container content-box content-box--pt-108" id="main-container">

    <!-- Tin tuc -->
    <?php
    $kq=$toeic->getTinTuc('vi');
    date_default_timezone_set('Asia/Ho_Chi_Minh');//để không bị lỗi timezone, nếu không có thì sẽ có thể gặp lỗi trên php 5.6
    ?>

    <section class="section mb-0">
        <div class="title-wrap title-wrap--line title-wrap--pr">
            <h3 class="section-title">TIN TỨC</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
            <?php while($row=$kq->fetch_assoc()){?>
            <article class="entry card card--1">
                <div class="entry__img-holder card__img-holder">
                    <a href="single-post-music.html">
                        <div class="thumb-container thumb-70">
                            <img data-src="<?=$row['AnhMinhHoa']?>" src="<?=$row['AnhMinhHoa']?>"
                                 class="entry__img lazyload" alt="<?=$row['TieuDe']?>" title="<?=$row['TieuDe']?>"/>
                            <div class="entry-date-label">
                                <div class="entry-date-label__weekday"><?=date('D',strtotime($row['NgayTao']))?></div>
                                <div class="entry-date-label__day"><?=date('d',strtotime($row['NgayTao']))?></div>
                                <div class="entry-date-label__month"><?=date('M',strtotime($row['NgayTao']))?></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="entry__body card__body">
                    <div class="entry__header">
                        <ul class="entry__meta">
                            <li class="entry__meta-category">
                                <a>News</a>
                            </li>
                        </ul>
                        <h2 class="entry__title" style="white-space: nowrap;overflow:hidden;text-overflow:ellipsis;">
                            <a href="single-post-music.html" title="<?=$row['TieuDe']?>"><?=$row['TieuDe']?></a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#"><?php $kqi= $toeic->getIdUser($row['NguoiTao']);$rowi=$kqi->fetch_assoc();echo $rowi['HoTen'];?></a>
                            </li>
                            <li class="entry__meta-date">
                                Jan 21, 2018
                            </li>
                        </ul>
                    </div>

                </div>
            </article>
            <?php }?>
        </div> <!-- end slider -->

    </section> <!-- end tin tuc -->


    <!-- Ad Banner 970 -->
    <div class="text-center pb-48">
        <a href="#">
            <img src="img/content/placeholder_970_1.jpg" alt="">
        </a>
    </div>

    <!-- tin tieng anh -->
    <?php
    $kq=$toeic->getTinTuc('en');
    ?>
    <section class="section mb-24">
        <div class="title-wrap title-wrap--line">
            <h3 class="section-title">TIN TIẾNG ANH</h3>
        </div>

        <div class="row row-20">

            <?php $row=$kq->fetch_assoc();?>
            <div class="col-md-3">
                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-65">
                                <img data-src="<?=$row['AnhMinhHoa']?>"  src="<?=$row['AnhMinhHoa']?>"
                                     class="entry__img lazyload" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post-music.html"><?=$row['TieuDe']?></a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#"><?php $kq1= $toeic->getIdUser($row['NguoiTao']);$row1=$kq1->fetch_assoc();echo $row1['HoTen'];?></a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p><?=$row['TomTat']?><p>
                        </div>
                    </div>
                </article>
            </div>

            <?php $row=$kq->fetch_assoc();?>
            <div class="col-md-6">
                <article class="entry thumb thumb--size-3 thumb--mb-20">
                    <div class="entry__img-holder thumb__img-holder"
                         style="background-image: url('<?=$row['AnhMinhHoa']?>');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--2">
                            <h2 class="thumb-entry-title">
                                <a href="single-post-music.html"><?=$row['TieuDe']?></a>
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

            <?php $row=$kq->fetch_assoc();?>
            <div class="col-md-3">
                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-65">
                                <img data-src="<?=$row['AnhMinhHoa']?>" src="<?=$row['AnhMinhHoa']?>"
                                     class="entry__img lazyload" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post-music.html"><?=$row['TieuDe']?></a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#"><?php $kq1= $toeic->getIdUser($row['NguoiTao']);$row1=$kq1->fetch_assoc();echo $row1['HoTen'];?></a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p><?=$row['TomTat']?></p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="row row-20">

            <?php $row=$kq->fetch_assoc();?>
            <div class="col-md-6">
                <article class="entry thumb thumb--size-3 thumb--mb-20">
                    <div class="entry__img-holder thumb__img-holder"
                         style="background-image: url('<?=$row['AnhMinhHoa']?>');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--2">
                            <h2 class="thumb-entry-title">
                                <a href="single-post-music.html"><?=$row['TieuDe']?></a>
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

            <?php $row=$kq->fetch_assoc();?>
            <div class="col-md-3">
                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-65">
                                <img data-src="<?=$row['AnhMinhHoa']?>" src="<?=$row['AnhMinhHoa']?>"
                                     class="entry__img lazyload" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post-music.html"><?=$row['TieuDe']?></a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#"><?php $kq1= $toeic->getIdUser($row['NguoiTao']);$row1=$kq1->fetch_assoc();echo $row1['HoTen'];?></a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p><?=$row['TomTat']?></p>
                        </div>
                    </div>
                </article>
            </div>

            <?php $row=$kq->fetch_assoc();?>
            <div class="col-md-3">
                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="single-post-music.html">
                            <div class="thumb-container thumb-65">
                                <img data-src="<?=$row['AnhMinhHoa']?>" src="<?=$row['AnhMinhHoa']?>"
                                     class="entry__img lazyload" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post-music.html"><?=$row['TieuDe']?></a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#"><?php $kq1= $toeic->getIdUser($row['NguoiTao']);$row1=$kq1->fetch_assoc();echo $row1['HoTen'];?></a>
                                </li>
                                <li class="entry__meta-date">
                                    Jan 21, 2018
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p><?=$row['TomTat']?></p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section> <!-- end tin tieng anh -->

    <!-- Bai giang Videos -->
    <section class="pb-32">
        <div class="title-wrap title-wrap--line">
            <h2 class="section-title">BÀI GIẢNG</h2>
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
    </section> <!-- end bai giang videos -->

    <!-- De thi thu -->
    <section class="section mb-0">
        <div class="title-wrap title-wrap--line title-wrap--pr">
            <h3 class="section-title">ĐỀ THI THỬ</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder"
                     style="background-image: url('img/logo.dethi.jpeg');">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post-music.html"><strong>ĐỀ THI SỐ 01</strong></a>
                        </h2>
                    </div>
                    <a href="single-post-music.html" class="thumb-url"></a>
                </div>
            </article>

            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder"
                     style="background-image: url('img/logo.dethi.jpeg');">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post-music.html"><strong>ĐỀ THI SỐ 02</strong></a>
                        </h2>
                    </div>
                    <a href="single-post-music.html" class="thumb-url"></a>
                </div>
            </article>

            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder"
                     style="background-image: url('img/logo.dethi.jpeg');">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post-music.html"><strong>ĐỀ THI SỐ 03</strong></a>
                        </h2>
                    </div>
                    <a href="single-post-music.html" class="thumb-url"></a>
                </div>
            </article>

            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder"
                     style="background-image: url('img/logo.dethi.jpeg');">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post-music.html"><strong>ĐỀ THI SỐ 04</strong></a>
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
                            <a href="single-post-music.html"><strong>ĐỀ THI SỐ 05</strong></a>
                        </h2>
                    </div>
                    <a href="single-post-music.html" class="thumb-url"></a>
                </div>
            </article>
        </div> <!-- end slider -->

    </section> <!-- end de thi thu -->

</div> <!-- end main container -->

