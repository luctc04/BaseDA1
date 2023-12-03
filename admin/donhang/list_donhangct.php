<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-layers bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Đơn hàng chi tiết</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.php"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản lý đơn hàng chi tiết</a> </li>
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
                                    <h5>Danh sách đơn hàng chi tiết</h5>
                                    <a href="index.php?act=list_donhang" class="btn btn-info btn-sm">Quay lại</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="product-id">#</th>
                                                    <th class="product-thumbnail">Tên sản phẩm</th>
                                                    <th class="product-id">Hình ảnh</th>
                                                    <th class="product-price">Số lượng</th>
                                                    <th class="product-quantity">Giá tiền </th>
                                                    <!-- <th class="product-remove">Action</th> -->
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                foreach ($onedh as $key => $dhct) :
                                                    extract($dhct);
                                                ?>
                                                    <tr>
                                                        <td class="product-id"><?= $key + 1  ?></td>
                                                        <td class="product-name"><?= $name ?? "" ?></td>
                                                        <td class="product-number" style="text-align: center;"><img src="../upload/<?= $img ?? "" ?>" alt="" width="90px"></td>
                                                        <td class="product-address"><?= $soluong ?? "" ?></td>
                                                        <td class="product-quantity"><?= number_format((int)$thanhtien, 0, ",", ".") ?? "" ?> <u> đ</u></td>
                                                    </tr>
                                                <?php
                                                endforeach;
                                                ?>
                                            </tbody>
                                        </table>
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