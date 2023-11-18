<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Tài khoản</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Tài Khoản</a> </li>
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
                                    <h5>Danh sách Tài Khoản</h5>

                                    <a href="/admin/taikhoans/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Tel</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($taikhoans as $taikhoan) : ?>
                                                    <tr>
                                                        <td><?= $taikhoan['id'] ?></td>
                                                        <td><?= $taikhoan['user'] ?></td>
                                                        <td><?= $taikhoan['pass'] ?></td>
                                                        <td><?= $taikhoan['email'] ?></td>
                                                        <td><?= $taikhoan['address'] ?></td>
                                                        <td><?= $taikhoan['tel'] ?></td>
                                                        <td><?= $taikhoan['role'] ?></td>
                                                        <td>
                                                            <a href="/admin/taikhoans/update?id=<?= $taikhoan['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/taikhoans/delete?id=<?= $taikhoan['id'] ?>" method="post">
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