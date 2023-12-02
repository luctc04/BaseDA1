<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Tài khoản</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-content">
                    <h2 class="login-title">QUÊN MẬT KHẨU</h2>
                    <p>Hello,Welcome to your account</p>
                    <div class="social-sign">
                    </div>
                    <form action="index.php?act=quenmk" method="post">

                        <label>Email</label>
                        <input type="email" name="email" />

                        <input type="submit" value="Gửi" name="guiemail">
                        <input type="reset" value="Nhập lại">
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