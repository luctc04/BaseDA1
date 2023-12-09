<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Tài khoản</h1>
                    <ul>
						<li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
						<li><a href="#">Đăng ký</a> <span class="divider"></span></li>
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
                    <div class="login-content login-margin">
                        <h2 class="login-title">TẠO TÀI KHOẢN MỚI</h2>
                        <p>Create your own Unicase account.</p>
                        <form action="index.php?act=dangky" method="post">

                            <label>User</label>
                            <input type="text" name="user" />
                            <span style="color: red"><?php echo !empty($error['user'])?$error['user']:false ?></span><br>


                            <label>Email</label>
                            <input type="email" name="email" />
                            <span style="color: red"><?php echo !empty($error['email'])?$error['email']:false ?></span><br>


                            <label>Password</label>
                            <input type="password" name="pass" />
                            <span style="color: red"><?php echo !empty($error['pass'])?$error['pass']:false ?></span><br>


                            <input class="login-sub" type="submit" name="dangky" value="Đăng ký" />
                        </form><br>

                        <p class="thongbao" style="color:green">
                            <?php
                            if (isset($thongbao) && ($thongbao != ""))
                                echo $thongbao;
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