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
                            <a href="index.php"><i class="feather icon-home"></i></a>
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

                                    <!-- <a href="/admin/taikhoans/create" class="btn btn-info btn-sm">Tạo mới</a> -->
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
                                                <?php
                                                foreach ($listtaikhoan as $taikhoan) {
                                                    extract($taikhoan);
                                                    $suatk = "index.php?act=suatk&id=" . $id;
                                                    $xoatk = "index.php?act=xoatk&id=" . $id;
                                                    echo '<tr>
                                                            <td>' . $id . '</td>
                                                            <td>' . $user . '</td>
                                                            <td>' . $pass . '</td>
                                                            <td>' . $email . '</td>
                                                            <td>' . $address . '</td>
                                                            <td>' . $tel . '</td>
                                                            <td>' . $role . '</td>

                                                            <td>
                                                                <a href="'.$suatk.'" class="btn btn-primary btn-sm">Cập nhật</a>

                                                                <form action="'.$xoatk.'" method="post">
                                                                    <button type="submit" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                                </form>
                                                        </td>
                                                        </tr>';
                                                }


                                                ?>
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