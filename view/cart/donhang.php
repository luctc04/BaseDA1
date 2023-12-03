<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1> Đơn hàng</h1>
                    <ul>
                        <li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
                        <li>Đơn hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cart-main-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="index.php?act=order" method="post">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr class="mau">
                                    <th class="product-id">#</th>
                                    <th class="product-thumbnail">Họ tên</th>
                                    <th class="product-id">Sđt</th>
                                    <th class="product-price">Địa chỉ</th>
                                    <th class="product-quantity">Tổng tiền </th>
                                    <th class="product-subtotal">Trạng thái</th>
                                    <th class="product-remove">Action</th>
                                </tr>
                            </thead>
                            <tbody id="order">
                                <?php
                                foreach ($listdonhang as $key => $donhang) :
                                    extract($donhang);
                                    $link_dhct = "index.php?act=donhangct&id_order=" . $donhang['id_order'];
                                ?>
                                    <tr>
                                        <td class="product-id"><?= $key + 1 ?? "" ?></td>
                                        <td class="product-name"><?= $hoten ?? "" ?></td>
                                        <td class="product-number"><?= $sdt ?? "" ?></td>
                                        <td class="product-address"><?= $diachi ?? "" ?></td>
                                        <td class="product-quantity"><?= number_format((int)$tongtien, 0, ",", ".") ?? "" ?> <u> đ</u></td>
                                        <td class="product-subtotal">
                                            <?php
                                            if ($trangthai == 1) {echo "Đang chờ duyệt";} else {
                                                if ($trangthai == 2) {echo "Đã xác nhận";} else {
                                                    if ($trangthai == 3) {echo "Đang vận chuyển";} else {
                                                        if ($trangthai == 4) {echo "Hoàn thành";}
                                                    }
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td class="product-remove">
                                            <a href="<?= $link_dhct ?>">Chi tiết</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>

                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>