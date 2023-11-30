<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-layers bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>SẢN PHẨM</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.php"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản lý sản phẩm</a> </li>
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
                                    <h5>Danh sách sản phẩm</h5>

                                    <a href="index.php?act=addsp" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <th>ID</th>
                                                <th>Tên</th>
                                                <th>Ảnh</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Giá sale</th>
                                                <!-- <th>Tình trạng</th> -->
                                                <!-- <th>Danh mục</th> -->
                                                <th>Action</th>
                                            </thead>

                                            <tbody>
                                                <?php
                                                foreach ($listsanpham as $sanpham) :
                                                    extract($sanpham);
                                                    
                                                    $suasp = "index.php?act=suasp&id=" . $id;
                                                    $xoasp = "index.php?act=xoasp&id=" . $id;
                                                    $hinhpath = "../upload/" . $img;
                                                    if (is_file($hinhpath)) {
                                                        $hinh = "<img src='" . $hinhpath . "' height='75' width='120'>";
                                                    } else {
                                                        $hinh = "no photo";
                                                    }
                                                    ?>

                                                        <tr>
                                                        <td><?=$id?></td>
                                                        <td><?=$name?></td>
                                                        <td><?=$hinh?></td>
                                                        <td><?=$soluong?></td>
                                                        <td><?=$price?></td>
                                                        <td><?=$price_sale?></td>
                                                        
                                                        <td>
                                                                <a href="<?=$suasp?>" class="btn btn-primary btn-sm">Cập nhật</a>
                                                                <a onclick="return confirm('Bạn có muốn xóa không?')" href="<?=$xoasp?>" class="btn btn-danger btn-sm">Xóa</a>

                                                                <!-- <form action="'.$xoasp.'" method="post">
                                                                    <button type="submit" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                                </form> -->
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