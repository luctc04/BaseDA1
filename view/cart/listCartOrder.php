<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1> Giỏ hàng</h1>
                    <ul>
                        <li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
                        <li>Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- cart-main-area start -->
<?php
if (empty($dataDb)) {
?>

    <div class="cart-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#" method="post">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">#</th>
                                        <th class="product-thumbnail">Ảnh</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Thành tiền</th>
                                        <th class="product-remove">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
} else {
?>
    <div class="cart-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="index.php?act=order" method="post">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">#</th>
                                        <th class="product-thumbnail">Ảnh</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Thành tiền</th>
                                        <th class="product-remove">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody id="order">
                                    <?php
                                    $sum_total = 0;
                                    foreach ($dataDb as $key => $product) :
                                        // kiểm tra số lượng sản phẩm trong giỏ hàng
                                        $quantityInCart = 0;
                                        foreach ($_SESSION['cart'] as $item) {
                                            if ($item['id'] == $product['id']) {
                                                $quantityInCart = $item['quantity'];
                                                break;
                                            }
                                        }
                                    ?>
                                        <tr>
                                            <td class="product-id"><?= $key + 1 ?></td>
                                            <td class="product-thumbnail"><a href="#"><img src="<?= $img_path, $product['img'] ?>" alt="<?= $product['name'] ?>" /></a></td>
                                            <td class="product-name"><a href="#"><?= $product['name'] ?></a></td>
                                            <td class="product-price"><span class="amount"><?= number_format((int)$product['price_sale'], 0, ",", ".") ?> <u>đ</u></span></td>
                                            <td class="product-quantity">
                                                <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)" />
                                            </td>
                                            <td class="product-subtotal">
                                                <?= number_format((int)$product['price_sale'] * (int)$quantityInCart, 0, ",", ".") ?> <u>đ</u>
                                            </td>
                                            <td class="product-remove">
                                                <i onclick="removeFormCart(<?= $product['id'] ?>)" class="fa fa-times"></i>
                                            </td>
                                        </tr>
                                    <?php
                                        // Tính tổng giá đơn hàng
                                        $sum_total += ((int)$product['price_sale'] * (int)$quantityInCart);

                                        // Lưu tổng giá trị vào sesion
                                        $_SESSION['resultTotal'] = $sum_total;

                                    endforeach;
                                    ?>
                                    <tr>
                                        <td colspan="5" class="product-name">
                                            <h4>Tổng tiền hàng:</h4>
                                        </td>
                                        <td colspan="1" align="center" class="product-price">
                                            <h4>
                                                <span>
                                                    <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                                                </span>
                                            </h4>
                                        </td>
                                        <td colspan="1">
                                            <div class="wc-proceed-to-checkout">
                                                <a href="index.php?act=order" name="order">Đặt hàng</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/cart/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('./view/cart/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/cart/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('./view/cart/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>