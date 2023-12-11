<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>THỦ TỤC THANH TOÁN</h1>
                    <ul>
                        <li><a href="index.html">Trang chủ</a> <span class="divider">|</span></li>
                        <li><a href="cart.html">Giỏ hàng</a> <span class="divider">|</span></li>
                        <li>Thủ tục thanh toán</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->
<!-- coupon-area start -->
<div class="coupon-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Phản hồi khách hàng? <span id="showlogin">Nhấn vào đây để đăng nhập</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <!-- <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p> -->
                            <form action="" method="post">
                                <p class="form-row-first">
                                    <label>Username <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row-last">
                                    <label>Password <span class="required">*</span></label>
                                    <input type="pa" />
                                </p>
                                <label>
                                    <input type="checkbox" />
                                    Remember me
                                </label>
                                <p class="form-row">

                                    <input type="submit" value="Đăng nhập" />
                                <p class="lost-password">
                                    <a href="#">Quên mật khẩu?</a>
                                </p>

                                </p>

                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Có phiếu giảm giá? <span id="showcoupon">Bấm vào đây để nhập mã của bạn</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input type="text" placeholder="Mã giảm giá" />
                                    <input type="submit" value="Áp dụng mã giảm giá" />
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- coupon-area end -->
<!-- checkout-area start -->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <form action="index.php?act=order" method="post">
                <div class="col-lg-6 col-md-6">
                    <div class="checkbox-form">
                        <h3>CHI TIẾT THANH TOÁN</h3>
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <input type="text" type="text" name="txthoten" required placeholder="Nhập Họ và Tên" />
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input type="text" name="txtaddress" required placeholder="Nhập Địa chỉ của bạn" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email" name="txtemail" required placeholder="Nhập Email" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Điện thoại <span class="required">*</span></label>
                                    <input type="text" name="txttel" required placeholder="Nhập số điện thoại" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú đặt hàng</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Nghi chú về đơn hàng của bạn, ví dụ như ghi chú đặc biệt kh giao hàng."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="your-order">
                        <h3>ĐƠN HÀNG CỦA BẠN</h3>

                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">SẢN PHẨM</th>
                                        <th class="product-total">TỔNG CỘNG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // print_r($cart);
                                    foreach ($cart as $item) {
                                    ?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <?= $item['name'] ?><strong class="product-quantity"> × <?= $item['quantity'] ?></strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount"><?= number_format($item['quantity'] * $item['price'], 0, ",", "."); ?> ₫</span>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Tổng tiền hàng</th>
                                        <td><span class="amount"><?= number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Phí vận chuyển</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" disabled />
                                                    <label>Miễn phí vận chuyển</label>
                                                </li>
                                                <li></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng thanh toán</th>
                                        <td><strong><span class="amount"><?= number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="payment-method">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Phương thức thanh toán
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p><input type="radio" name="pttt" id="" value="1" checked required> Thanh toán khi giao hàng (COD)</p>
                                            <p><input type="radio" name="pttt" id="" value="2" required> Thanh toán bằng Momo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <input type="submit" value="Hoàn Tất Đặt Hàng" name="order_confirm" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>