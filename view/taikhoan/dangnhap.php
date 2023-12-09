<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Tài khoản</h1>
                    <ul>
						<li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
						<li><a href="#">Đăng nhập</a> <span class="divider"></span></li>
					</ul>
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
<?php
} else {
?>
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6-1minh">
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
                            <span style="color: red"><?php echo !empty($error['user'])?$error['user']:false ?></span><br>

                            <label>Password</label>
                            <input type="password" name="pass" />
                            <span style="color: red"><?php echo !empty($error['pass'])?$error['pass']:false ?></span><br>

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
            </div>
        </div>
    </div>
<?php } ?>