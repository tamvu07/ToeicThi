<?php
if (isset($_GET['id'])) $idTin = $_GET['id'];
else {
    die("ban la ai vay ??");
}
$kq = $toeic->lay_TinTuc_TheoId($idTin);
$row = $kq->fetch_array();
?>

<div class="main-container container" id="main-container">

    <div id="container">
        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-8 blog__content mb-72">
                <div class="content-box">

                    <!-- standard post -->
                    <article class="entry mb-0">

                        <div class="single-post__entry-header entry__header">
                            <h1 class="single-post__entry-title">
                                <?= $row['TieuDe'] ?>
                            </h1>
                        </div> <!-- end entry header -->

                        <div class="entry__img-holder">
                            <img src="<?= $row['AnhMinhHoa'] ?>" alt="" class="entry__img">
                        </div>

                        <div class="entry__article-wrap">
                            <div class="entry__article">
                                <?= $row['NoiDung'] ?>
                            </div> <!-- end entry article -->
                        </div> <!-- end entry article wrap -->

                    </article> <!-- end standard post -->



                </div> <!-- end content box -->
            </div> <!-- end post content -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Tin tieng Viet -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">Tin tiếng Việt</h4>
                    <ul class="post-list-small">
                        <?php
                        $kq = $toeic->lay_TinTuc('vi');
                        while ($row = $kq->fetch_assoc()) {
                            if($row['MaTinTuc']==$idTin) continue;
                        $TieuDeKhongDau=$toeic->changeTitle($row['TieuDe']);
                        ?>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="View/News/<?=$row['MaTinTuc']?>/<?=$TieuDeKhongDau?>.html" title="<?= $row['TieuDe'] ?>">
                                            <img src="<?=$row['AnhMinhHoa']?>"
                                                 alt="" class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="View/News/<?=$row['MaTinTuc']?>/<?=$TieuDeKhongDau?>.html" title="<?= $row['TieuDe'] ?>"><?=$row['TieuDe']?></a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#"><?php $kqi = $toeic->lay_UserTheoId($row['NguoiTao']);
                                                $rowi = $kqi->fetch_assoc();
                                                echo $rowi['Ho']." ".$rowi['Ten']; ?></a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <?php
                                            $date = date_parse($row['NgayTao']);
                                            $ngay = $date['day'];
                                            $thang = $date['month'];
                                            $nam = $date['year'];
                                            echo date("d-m-Y",mktime(0,0,0,$thang,$ngay,$nam));
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <?php } ?>
                    </ul>
                </aside> <!-- end Tin tieng Viet -->

                <!-- Tin tieng Anh -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">Tin tiếng Anh</h4>
                    <ul class="post-list-small">
                        <?php
                        $kq = $toeic->lay_TinTuc('en');
                        while ($row = $kq->fetch_assoc()) {
                            if($row['MaTinTuc']==$idTin) continue;
                            $TieuDeKhongDau=$toeic->changeTitle($row['TieuDe']);
                            ?>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="View/News/<?=$row['MaTinTuc']?>/<?=$TieuDeKhongDau?>.html" title="<?= $row['TieuDe'] ?>">
                                                <img src="<?=$row['AnhMinhHoa']?>"
                                                     alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="View/News/<?=$row['MaTinTuc']?>/<?=$TieuDeKhongDau?>.html" title="<?= $row['TieuDe'] ?>"><?=$row['TieuDe']?></a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#"><?php $kqi = $toeic->lay_UserTheoId($row['NguoiTao']);
                                                    $rowi = $kqi->fetch_assoc();
                                                    echo $rowi['Ho']." ".$rowi['Ten']; ?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?php
                                                $date = date_parse($row['NgayTao']);
                                                $ngay = $date['day'];
                                                $thang = $date['month'];
                                                $nam = $date['year'];
                                                echo date("d-m-Y",mktime(0,0,0,$thang,$ngay,$nam));
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        <?php } ?>
                    </ul>
                </aside> <!-- end Tin tieng Anh -->

            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->
</div>

<link rel="stylesheet" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/font-icons.css"/>
<link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="../css/colors/cyan.css"/>
<link rel="stylesheet" href="../css/Thanh-Style-Header.css"/>