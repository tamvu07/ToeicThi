<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">

                <div class="card-header">
                    <h4 class="title">THỐNG KÊ TÀI KHOẢN</h4>
                    <p class="category">Users statistic</p>
                </div>
                <div class="content">
                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth">
                        <div class="card-body ">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth">
                                <?php
                                $arr = $ad->users_statistic();
                                $tongUser = $arr[0] + $arr[1] + $arr[2];
                                $admin = round($arr[0] / $tongUser * 100);
                                $hocvien = round($arr[1] / $tongUser * 100);
                                $giaovien = round($arr[2] / $tongUser * 100);
                                ?>
                                <canvas id="countries" style="width: 100%"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Học viên
                            <i class="fa fa-circle text-danger"></i> Giáo viên
                            <i class="fa fa-circle text-warning"></i> Admin
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">THỐNG KÊ BÌNH LUẬN</h4>
                    <p class="category">Số bình luận theo mã đề</p>
                </div>
                <div class="content">
                    <div id="chartHours" class="ct-chart">
                        <?php
                        $bl1=$ad->binhluan_statistic(1);
                        $bl2=$ad->binhluan_statistic(2);
                        $tong = $bl1+$bl2;
                        $bl11=$bl1/$tong*100;
                        $bl22=$bl2/$tong*100;
                        ?>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                                 aria-valuemax="100" style="width:<?= $bl11 ?>%;background-color: #44b1e3">
                                <?=$bl1?> bình luận
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                                 aria-valuemax="100" style="width:<?= $bl22 ?>%;background-color: #e38834">
                                <?=$bl2?> bình luận
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Đề 1
                            <i class="fa fa-circle text-warning"></i> Đề 2
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">THỐNG KÊ DỰ THI</h4>
                    <p class="category">Số lượt đăng kí thi theo mã đề</p>
                </div>
                <div class="content">
                    <div id="chartActivity" class="ct-chart">
                        <?php
                        $arr = $ad->ds_duthi_statistic();
                        $tong = $arr[0] + $arr[1];
                        $de1 = round($arr[0] / $tong * 100);
                        $de2 = round($arr[1] / $tong * 100);
                        ?>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                                 aria-valuemax="100" style="width:<?= $de1 ?>%;background-color: #44b1e3">
                                Đề 1
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                                 aria-valuemax="100" style="width:<?= $de2 ?>%;background-color: #e33d24">
                                Đề 2
                            </div>
                        </div>
                    </div>

                    <div class="footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Đề 1
                            <i class="fa fa-circle text-danger"></i> Đề 2
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-check"></i> Data information certified
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Các nhiệm vụ trong tháng</h4>
                    <p class="category">(dành cho giáo viên và admin)</p>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1"></label>
                                    </div>
                                </td>
                                <td>Tìm kiếm các khách hàng mới</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task"
                                            class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox2" type="checkbox" checked>
                                        <label for="checkbox2"></label>
                                    </div>
                                </td>
                                <td>Điều hành và quản trị website</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task"
                                            class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                                <td>Giáo viên thiết kế các chương trình ưu đãi cho học viên
                                </td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task"
                                            class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox4" type="checkbox" checked>
                                        <label for="checkbox4"></label>
                                    </div>
                                </td>
                                <td>Giáo viên thêm đề mới mỗi 2 tuần</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task"
                                            class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5"></label>
                                    </div>
                                </td>
                                <td>Tham khảo các tài liệu, nâng cao chất lượng làm việc</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task"
                                            class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox6" type="checkbox" checked>
                                        <label for="checkbox6"></label>
                                    </div>
                                </td>
                                <td>Post các bài quảng cáo lên các trang mạng xã hội</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task"
                                            class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // pie chart data
    var pieData = [
        {
            value: <?=$admin?>,
            color: "#e38834"
        },
        {
            value: <?=$giaovien?>,
            color: "#e33d24"
        },
        {
            value: <?=$hocvien?>,
            color: "#44b1e3"
        }
    ];

    // pie chart options
    var pieOptions = {
        segmentShowStroke: false,
        animateScale: true
    }

    // get pie chart canvas
    var countries = document.getElementById("countries").getContext("2d");

    // draw pie chart
    new Chart(countries).Pie(pieData, pieOptions);
</script>