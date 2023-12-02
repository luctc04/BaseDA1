<?php
    //kiểm tra xem có phải là mảng hay kh
    if(is_array($donhang)){
        extract($donhang);
    }
?>
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
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
                        <li class="breadcrumb-item"><a href="#!">Đơn hàng/a> </li>
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
                                    <h5>Cập nhật</h5>
                                </div>
                                <div class="card-block">
                                    <form action="index.php?act=update_donhang" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_order" value="<?=$id_order?>">

                                        <label for="name" class="mt-3">Họ tên</label>
                                        <input type="text" name="" class="form-control" disabled value="<?=$hoten?>">

                                        <label for="sdt" class="mt-3">Số điện thoại</label>
                                        <input type="number" name="" class="form-control" disabled value="<?=$sdt?>">

                                        <label for="email" class="mt-3">Email</label>
                                        <input type="email" name="" class="form-control" disabled value="<?=$email?>">

                                        <label for="diachi" class="mt-3">Địa chỉ</label>
                                        <input type="text" name="" class="form-control" disabled value="<?=$diachi?>">

                                        <label for="tongtien" class="mt-3">Tổng tiền </label>
                                        <input type="number" name="" class="form-control" disabled value="<?=$tongtien?>">

                                        <label for="pttt" class="mt-3">Phương thức thanh toán</label>
                                        <select name="pttt" id="is_active" class="form-control" disabled>
                                            <option <?= $pttt ? '' : 'selected' ?>  value="1">Thanh toán khi nhận hàng</option>
                                            <option <?= $pttt ? 'selected' : '' ?>  value="2" >Chuyển khoản</option>
                                        </select>

                                        <label for="ngaydathang" class="mt-3">Ngày đặt hàng</label>
                                        <input type="datetime" name="" class="form-control" disabled value="<?=$ngaydathang?>">

                                        <label for="trangthai" class="mt-3">Trạng thái</label>
                                        <select name="trangthai" id="" class="form-control">
                                        <?php
                                                            if($trangthai==1){echo '<option '.$donhang['trangthai'].'  value="1" >Đang chờ duyệt</option> <option '.$donhang['trangthai'].'  value="2" >Đã xác nhận</option>';}else{
                                                                if($trangthai ==2){echo '<option '.$donhang['trangthai'].'  value="2" >Đã xác nhận</option>';}else{
                                                                    if($trangthai ==3){echo '<option '.$donhang['trangthai'].'  value="3" >Đang vận chuyển</option>';}else{
                                                                        if($trangthai ==4){echo '<option '.$donhang['trangthai'].'  value="4" >Hoàn thành</option>';}
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                            <option <?= $donhang['trangthai'] ?>  value="1" >Đang chờ duyệt</option>
                                            <option <?= $donhang['trangthai'] ?>  value="2" >Đã xác nhận</option>
                                            <option <?= $donhang['trangthai'] ?>  value="3" >Đang vận chuyển </option>
                                            <option <?= $donhang['trangthai'] ?>  value="4" >Hoàn thành</option>
                                        </select><br>

                                        <input type="submit" name="btn-submit" class="btn btn-info mt-3" value="Submit">
                                        <a href="index.php?act=list_donhang" class="btn btn-primary mt-3">Quay lại d/s</a><br>
                                    </form>
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