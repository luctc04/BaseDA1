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
                                    <h5>Danh sách thống kê</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <th>Mã danh mục</th>
                                                <th>Tên danh mục</th>
                                                <th>Số lượng</th>
                                                <th>Giá cao nhất</th>
                                                <th>Giá thấp nhất</th>
                                                <th>Giá trung bình</th>
                                            </thead>

                                            <tbody>
                                                <?php
                                                foreach ($listthongke as $thongke) :
                                                    extract($thongke);
                                                ?>
                                                    <tr>
                                                        <td><?= $madm ?></td>
                                                        <td><?= $tendm ?></td>
                                                        <td><?= $countsp ?></td>
                                                        <td><?= number_format((int)$maxgia, 0, ",", ".") ?><u>đ</u></td>
                                                        <td><?= number_format((int)$mingia, 0, ",", ".") ?><u>đ</u></td>
                                                        <td><?= number_format((int)$avggia, 0, ",", ".") ?><u>đ</u></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                        <div class="card-header">
                                            <a href="index.php?act=bieudo" class="btn btn-info btn-sm">Xem biểu đồ</a>
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
</div>
</div>