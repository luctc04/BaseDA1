<div class="slider-area">
    <div class="slider-active">
        <div class="single-slider slide-height d-flex align-items-center" style="background-image:url(img/slider/s1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slide-content text-center">
                            <h6>Bạn yêu thú cưng</h6>
                            <h1>Hãy đến với chúng tôi</h1>
                            <a class="btn" href="#">Liên hệ ngay
                                <i class="icofont icofont-location-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- featured-area start -->
<div class="category-area pad">
    <div class="container">
        <div class="row">
            <div class="section-title ">
                <h2>SẢN PHẨM</h2>
                <div class="title-icon">
                    <span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) :
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
            ?>
                <div class="single-product ">
                    <div class="product-img">
                        <a href="<?= $linksp ?>">
                            <img src="<?= $hinh ?>" alt="" width="100%" />
                        </a>
                        <span class="tag-line">new</span>
                        <div class="product-action">
                            <div class="button-top">
                                <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                            <div class="button-cart">
                                <button data-id="<?= $id ?>" class="btnCart" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price_sale ?>)"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="<?= $linksp ?>"><?= $name ?></a></h3>
                        <div class="price">
                            <span><?= number_format((int)$price_sale, 0, ",", ".") ?><u>đ</u></span>
                            <span class="old"><?= number_format((int)$price, 0, ",", ".") ?><u>đ</u></span>
                        </div>
                    </div>

                </div>
            <?php
                $i++;
            endforeach;
            ?>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');

    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/cart/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>