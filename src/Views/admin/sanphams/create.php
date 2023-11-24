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
                                    <h5>Thêm mới</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="id_dm">Danh mục</label>
                                        <select name="id_dm" id="id_dm" class="form-control">
                                            <option value="0" selected>Tất cả</option>
                                            <?php foreach ($danhmucs as $danhmuc) : ?>
                                                <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="name" class="mt-3">Tên</label>
                                        <input type="text" name="name" class="form-control">

                                        <label for="img" class="mt-3">Ảnh</label>
                                        <input type="file" name="img" class="form-control">

                                        <label for="xuatsu" class="mt-3">Xuất sứ</label>
                                        <input type="text" name="xuatsu" class="form-control">

                                        <label for="mota" class="mt-3">Mô tả</label>
                                        <textarea name="mota" id="" rows="5" class="form-control"></textarea>

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