<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-layers bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Bình Luận</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.php"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản lý bình luận</a> </li>
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
                                    <h5>Danh sách bình luận</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <th>Id</th>
                                                <th>Nội dung</th>
                                                <th>Iduser</th>
                                                <th>Idpro</th>
                                                <th>Ngày bình luận</th>
                                                <th>Action</th>
                                            </thead>

                                            <tbody>
                                            <?php
                                                foreach ($listbinhluan as $binhluan) :
                                                    extract($binhluan);
                                                    $xoabl = "index.php?act=xoabl&id=" . $id;
                                                ?>

                                                    <tr>
                                                        <td><?= $id ?></td>
                                                        <td><?= $noidung ?></td>
                                                        <td><?= $iduser ?></td>
                                                        <td><?= $idpro ?></td>
                                                        <td><?= $ngaybinhluan ?></td>

                                                        <td>
                                                            <a onclick="return confirm('Bạn có muốn xóa không?')" href="<?= $xoabl ?>" class="btn btn-danger btn-sm">Xóa</a>
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