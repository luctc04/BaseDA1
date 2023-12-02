<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-layers bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Đơn hàng</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.php"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản lý đơn hàng</a> </li>
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
                                    <h5>Danh sách đơn hàng</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <th>ID</th>
                                                <th>id_user</th>
                                                <th>Họ tên</th>
                                                <th>Sđt</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Tổng tiền</th>
                                                <th>Pttt</th>
                                                <th>Ngày đạt hàng</th>
                                                <th>Trạng thái</th>
                                                <th>Action</th>
                                            </thead>

                                            <tbody>
                                                <?php
                                                foreach ($listdonhang as $donhang) :
                                                    extract($donhang);
                                                    // $donhangct = "index.php?act=donhangct&id=" . $id;
                                                    $suadh = "index.php?act=suadh&id_order=".$id_order;
                                                ?>

                                                    <tr>
                                                        <td><?= $id_order  ?></td>
                                                        <td><?= $id_user ?></td>
                                                        <td><?= $hoten ?></td>
                                                        <td><?= $sdt ?></td>
                                                        <td><?= $email ?></td>
                                                        <td><?= $diachi ?></td>
                                                        <td><?= number_format((int)$tongtien, 0, ",", ".") ?><u>đ</u></td>
                                                        <td><?php 
                                                            if($pttt==1){echo "Thanh toán khi nhận hàng";}else{
                                                                if($pttt ==2){echo "Chuyển khoản";}
                                                            }
                                                        ?></td>
                                                        <td><?= $ngaydathang ?></td>
                                                        <td><?php
                                                            if($trangthai==1){echo "Đang chờ duyệt";}else{
                                                                if($trangthai ==2){echo "Đã xác nhận";}else{
                                                                    if($trangthai ==3){echo "Đang vận chuyển";}else{
                                                                        if($trangthai ==4){echo "Hoàn thành";}
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?= $suadh ?>">
                                                                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                                            </a>
                                                            <a href="<?= $danhsachbienthe ?>">
                                                                <button class="btn btn-eye btn-sm trash btn btn-primary " type="button" title="Xem" >
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
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