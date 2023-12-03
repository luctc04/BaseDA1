<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-layers bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Thống kê sản phẩm theo danh mục</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.php"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Thống kê sản phẩm theo danh mục</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Biểu đồ thống kê</h5>
                                    <a href="index.php?act=thongke" class="btn btn-info btn-sm">Danh sách</a>
                                </div><div class="sangphai">
                                    <div id="piechart"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                                    <script type="text/javascript">
                                        // Load google charts
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(drawChart);

                                        // Draw the chart and set the chart values
                                        function drawChart() {
                                            var data = google.visualization.arrayToDataTable([
                                                ['Danh mục', 'Số lượng sản phẩm'],
                                                <?php
                                                $tongdm = count($listthongke);
                                                $i = 1;
                                                foreach ($listthongke as $thongke) {
                                                    extract($thongke);
                                                    if ($i == $tongdm) $dauphay = "";
                                                    else $dauphay = ",";
                                                    echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
                                                    $i += 1;
                                                }
                                                ?>
                                            ]);
                                            // Optional; add a title and set the width and height of the chart
                                            var options = {
                                                'title': 'Thống kê sản phẩm theo danh mục',
                                                'width': 900,
                                                'height': 600
                                            };

                                            // Display the chart inside the <div> element with id="piechart"
                                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                            chart.draw(data, options);
                                        }
                                    </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>