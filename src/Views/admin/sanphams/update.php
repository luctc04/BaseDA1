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
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
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
                                    <h5>Cập Nhật</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">

                                        <label for="id_dm">Danh mục</label>
                                        <select name="id_dm" id="id_dm" class="form-control">
                                            <?php foreach ($danhmucs as $danhmuc) : ?>
                                                <option 
                                                    <?= $sanpham['id_dm'] == $danhmuc['id'] ? 'selected' : '' ?> 
                                                    value="<?= $danhmuc['id'] ?>">
                                                    
                                                    <?= $danhmuc['name'] ?>

                                                </option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="name" class="mt-3">Tên</label>
                                        <input type="text" name="name" class="form-control" value="<?= $sanpham['name'] ?>">

                                        <label for="img" class="mt-3">Ảnh</label>
                                        <input type="file" name="img" id="img" class="form-control">
                                        <input type="hidden" name="img_current" id="img_current" class="form-control" value="<?= $sanpham['img'] ?>"><br>
                                        <center><img  src="<?= $sanpham['img'] ?>" alt="" height="200px" width="300px"><br></center>

                                        <label for="xuatsu" class="mt-3">Xuất sứ</label>
                                        <input type="text" name="xuatsu" class="form-control" value="<?= $sanpham['xuatsu'] ?>">

                                        <label for="mota" class="mt-3">Mô tả</label>
                                        <textarea name="mota" id="" rows="5" class="form-control"><?= $sanpham['mota'] ?></textarea>

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/sanphams" class="btn btn-primary mt-3">Quay lại d/s</a>
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