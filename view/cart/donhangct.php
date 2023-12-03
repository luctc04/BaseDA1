<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1> Đơn hàng chi tiết</h1>
                    <ul>
                        <li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
                        <li>Đơn hàng chi tiết</li>
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
                <form action="#" method="post">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-id">#</th>
                                    <th class="product-thumbnail">Tên sản phẩm</th>
                                    <th class="product-id">Hình ảnh</th>
                                    <th class="product-price">Số lượng</th>
                                    <th class="product-quantity">Giá tiền </th>
                                    <!-- <th class="product-remove">Action</th> -->
                                </tr>
                            </thead>
                            <tbody >
                                <?php
                                foreach($onedh as $key => $dhct):
                                  extract($dhct);
                               ?>
                                <tr>
                                    <td class="product-id"><?= $key + 1  ?></td>
                                    <td class="product-name"><?= $name ?? "" ?></td>
                                    <td class="product-number"><img src="upload/<?= $img ?? "" ?>" alt="" width="80px"></td>
                                    <td class="product-address"><?= $soluong ?? "" ?></td>
                                    <td class="product-quantity"><?= number_format((int)$thanhtien, 0, ",", ".") ?? "" ?> <u> đ</u></td>
                                    <!-- <td class="product-remove">
                                            <a href="#">Xem chi tiết</a>
                                        </td> -->
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
