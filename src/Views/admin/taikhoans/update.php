<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Tài Khoản</h5>
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
                                    <h5>Cập Nhật</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post">
                                        <label for="user">User</label>
                                        <input type="text" name="user" class="form-control" value="<?= $taikhoan['user'] ?>">

                                        <label for="pass" class="mt-3">Password</label>
                                        <input type="password" name="pass" class="form-control" value="<?= $taikhoan['pass'] ?>">

                                        <label for="email" class="mt-3">Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= $taikhoan['email'] ?>">

                                        <label for="address" class="mt-3">Address</label>
                                        <input type="text" name="address" class="form-control" value="<?= $taikhoan['address'] ?>">

                                        <label for="tel" class="mt-3">Tel</label>
                                        <input type="text" name="tel" class="form-control" value="<?= $taikhoan['tel'] ?>">
                                        
                                        <label for="role" class="mt-3">Role</label>
                                        <input type="text" name="role" class="form-control" value="<?= $taikhoan['role'] ?>">

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/taikhoans" class="btn btn-primary mt-3">Quay lại d/s</a>
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