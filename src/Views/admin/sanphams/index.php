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
                        <li class="breadcrumb-item"><a href="#!">Sản phẩm</a> </li>
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
                                    <h5>Danh sách Sản phẩm</h5>

                                    <a href="/admin/sanphams/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên</th>
                                                    <th>Giá</th>
                                                    <th>Ảnh</th>
                                                    <th>Mô tả</th>
                                                    <th>Lượt xem</th>
                                                    <th>iddm</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($sanphams as $sanpham) : ?>
                                                    <tr>
                                                        <td><?= $sanpham['id'] ?></td>
                                                        <td><?= $sanpham['name'] ?></td>
                                                        <td><?= $sanpham['price'] ?></td>
                                                        <td><img src=<?= "/uploads/".$sanpham['img'] ?> height='80' width='90'></td>
                                                        <td><?= $sanpham['mota'] ?></td>
                                                        <td><?= $sanpham['view'] ?></td>
                                                        <td><?= $sanpham['iddm'] ?></td>

                                                        <td>
                                                            <a href="/admin/sanphams/update?id=<?= $sanpham['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/sanphams/delete?id=<?= $sanpham['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
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