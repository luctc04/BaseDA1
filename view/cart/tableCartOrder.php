<?php
session_start();
include "../../model/pdo.php";
include "../../model/sanpham.php";
include "../../model/taikhoan.php";
include "../../model/danhmuc.php";
include "../../model/order.php";
include "../../global.php";

// Kiểm tra xem giỏ hàng có dữ liệu hay không
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');

    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idList = implode(',', $productId);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);
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
                                            <td><?= $key + 1 ?></td>
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
                                        <td colspan="5"  class="product-name">
                                            <h4>Tổng tiền hàng:</h4>
                                        </td>
                                        <td colspan="1" align="center" class="product-price">
                                            <h4>
                                                <span>
                                                    <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                                                </span>
                                            </h4>
                                        </td>
                                        <td colspan="1" >
                                            <div class="wc-proceed-to-checkout">
                                                <a href="#">Đặt hàng</a>
                                            </div>
                                        </td>
                                    </tr>       
<?php   
}
?>