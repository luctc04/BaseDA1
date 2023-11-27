<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- login-area start -->

<?php

if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
?>
    <div class="row mb10">
        Xin chào: <strong><?= $user ?></strong>
    </div>
    <div class="row mb10">
        <li>
            <a href="index.php?act=quenmk">Quên mật khẩu</a>
        </li>
        <li>
            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
        </li>
        <?php if ($role == 1) { ?>
            <li>
                <a href="admin/index.php">Đăng nhập Admin</a>
            </li>
        <?php } ?>
        <li>
            <a href="index.php?act=thoat">Thoát</a>
        </li>
    </div>
<?php
} else {

?>
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-content">
                        <h2 class="login-title">Đăng nhập</h2>
                        <p>Hello,Welcome to your account</p>
                        <div class="social-sign">
                            <a href="#"><i class="fa fa-facebook"></i> Sign in with facebook</a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i> Sign in with twitter</a>
                        </div>
                        <form action="index.php?act=dangnhap" method="post">

                            <label>User</label>
                            <input type="text" name="user" />

                            <label>Password</label>
                            <input type="password" name="pass" />

                            <div class="login-lost">
                                <span class="log-rem">
                                    <input type="checkbox" />
                                    <label> Ghi nhớ tài khoản!</label>
                                </span>
                                <span class="forgot-login">
                                    <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                                </span>
                            </div>
                            <input class="login-sub" type="submit" name="dangnhap" value="Đăng nhập" />
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-content login-margin">
                        <h2 class="login-title">TẠO TÀI KHOẢN MỚI</h2>
                        <p>Create your own Unicase account.</p>
                        <form action="index.php?act=dangky" method="post">

                            <label>User</label>
                            <input type="text" name="user" />

                            <label>Email</label>
                            <input type="email" name="email" />

                            <label>Password</label>
                            <input type="password" name="pass" />

                            <input class="login-sub" type="submit" name="dangky" value="Đăng ký" />
                        </form><br>

                        <p class="thongbao">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </p>

                        <div class="sign-up-today">
                            <h2 class="login-title">sign up today and you'll be able to:</h2>
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-check-square-o"></i>
                                        <span>speed your way through the checkout</span>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-check-square-o"></i>
                                        <span>track your order easily</span>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-check-square-o"></i>
                                        <span>keep a record of your all purchase</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>