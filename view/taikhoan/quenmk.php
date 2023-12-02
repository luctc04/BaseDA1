<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Quên mật khẩu</h1>
                    <ul>
						<li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
						<li><a href="#">Quên mật khẩu</a> <span class="divider"></span></li>
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
                <div class="login-content">
                    <h2 class="login-title">QUÊN MẬT KHẨU</h2>
                    <p>Hello,Welcome to your account</p>
                    <div class="social-sign">
                    </div>
                    <form action="index.php?act=quenmk" method="post">

                        <label>Email</label>
                        <input type="email" name="email" />

                        <input type="reset" class="login-sub" value="Nhập lại">
                        <input type="submit" class="login-sub" value="Gửi" name="guiemail">
                    </form>
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