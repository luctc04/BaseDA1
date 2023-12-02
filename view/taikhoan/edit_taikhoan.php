<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Cập nhật tài khoản</h1>
                    <ul>
                        <li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
                        <li>Cập nhật tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6-1minh">
                <div class="login-content login-margin">
                    <h2 class="login-title">Cập nhật tài khoản</h2>
                    <p>Create your own Unicase account.</p>
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                    <form action="index.php?act=edit_taikhoan" method="post">

                        <label>User</label>
                        <input type="text" name="user" value="<?= $user ?>" />

                        <label>Email</label>
                        <input type="email" name="email" value="<?= $email ?>" />

                        <label>Password</label>
                        <input type="password" name="pass" value="<?= $pass ?>">

                        <label>Địa chỉ</label>
                        <input type="text" name="address" value="<?= $address ?>">

                        <label>Điện thoại</label>
                        <input type="text" name="tel" value="<?= $tel ?>">

                        <input type="hidden" name="id" value="<?= $id ?>">

                        <input class="login-sub" type="reset" value="Nhập lại">
                        <input class="login-sub" type="submit" name="capnhat" value="Cập nhật" />
                    </form><br>
                    <h2 class="thongbao">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </h2>

                </div>
            </div>
        </div>
    </div>
</div>