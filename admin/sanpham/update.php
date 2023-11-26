<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/". $img;
    if ( is_file($hinhpath)){
        $hinh = '<img src="'.$hinhpath.'" width="280" height="160" />';
    }else{
        $hinh = "No photo";
    }
?>

<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.php"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Sản Phẩm</a> </li>
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
                                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <label for="iddm">Danh mục</label>
                                        <select name="iddm" id="" class="form-control">
                                            <?php 
                                                foreach($listdanhmuc as $danhmuc){
                                                    extract($danhmuc);
                                                    if($iddm == $id){
                                                        echo '<option selected value="'.$id.'">'.$name.'</option>';
                                                    }else{
                                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                                    }
                                                }
                                                ?>
                                        </select>
                                        <label for="name" class="mt-3">Tên</label>
                                        <input type="text" name="name" class="form-control" value="<?=$name?>">

                                        <label for="img" class="mt-3">Ảnh</label>
                                        <input type="file" name="hinh" class="form-control"><br>
                                        <center><?=$hinh?></center>

                                        <label for="soluong" class="mt-3">Số lượng</label>
                                        <input type="number" name="soluong" class="form-control" value="<?=$soluong?>">

                                        <label for="price" class="mt-3">Giá</label>
                                        <input type="number" name="price" class="form-control" value="<?=$price?>">

                                        <label for="price_sale" class="mt-3">Giá sale</label>
                                        <input type="number" name="price_sale" class="form-control" value="<?=$price_sale?>">

                                        <label for="xuatsu" class="mt-3">Xuất sứ</label>
                                        <input type="text" name="xuatsu" class="form-control" value="<?=$xuatsu?>">

                                        <label for="mota" class="mt-3">Mô tả</label>
                                        <textarea name="mota" id="" rows="5" class="form-control"><?=$mota?></textarea>

                                        <input type="submit" name="btn-submit" class="btn btn-info mt-3" value="Submit">
                                        <a href="index.php?act=listsp" class="btn btn-primary mt-3">Quay lại d/s</a>
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