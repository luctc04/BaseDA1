<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-list">
					<h1>THÔNG TIN CHI TIẾT SẢN PHẨM</h1>
					<ul>
						<li><a href="/index.php">Trang chủ</a> <span class="divider">|</span></li>
						<li><a href="shop.html">Danh mục</a> <span class="divider">|</span></li>
						<li>Thông tin chi tiết sản phẩm</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb-area end -->
<!-- shop-area start -->
<div class="shop-area">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="single-pro-tab-content">
							<?php
							extract($onesp);
							?>
							<div class="row boxcontent">
								<?php

								$img = $img_path . $img;
								echo '<div class="tab-pane active"><img src="' . $img . '" ></div>';
								?>
							</div>
							<!-- <div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home" src="'.$img.'"></a></div>
							</div> -->
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 shop-list shop-details">
						<div class="product-content">
							<h3><a href="product-details.html"><?= $name ?></a></h3>
							<div class="price">
								<span><?= number_format((int)$price_sale, 0, ",", ".") ?><u>đ</u></span>
								<span class="old"><?= number_format((int)$price, 0, ",", ".") ?><u>đ</u></span>
							</div>
							<div class="s-p-rating">
								<span class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</span>
								<span class="review-no">04 Review (s)</span>
								<span class="review-no add-review"><a href="#">Add your review</a></span>
							</div>
							<p>Xuất sứ : <?= $xuatsu ?></p>
							<!-- <div class="pro-size">
								<label>color <span>*</span></label>
								<select>
									<option value="1">Black</option>
									<option value="1">White</option>
								</select>
							</div> -->

							<div class="product-action">
								<p>Số lượng: <?= $soluong ?></p>
								<div class="cart-plus">
									<form action="index.php?act=sanphamct&idsp=<?= $id?>" method="post">
										<div class="">
											<!-- <input type="hidden" name="id" value=""> -->
											<!-- <input type="hidden" name="price_sale" value="<?= $price_sale ?>"> -->
											<input type="number" name="soluong" min="1" max="<?=$soluong?>" value="1" />
										</div>
									</form>
								</div>
								<div class="button-top">
									<a href="#"><i class="fa fa-heart"></i></a>
								</div>
								<div class="button-cart">
									<button data-id="<?= $id ?>" class="btnCart" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price_sale ?>)"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
								</div>
							</div>
							<div class="product-share">
								<label>Share:</label>
								<span>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="product-tabs">
							<div>
								<!-- Nav tabs -->
								<ul class="pro-details-tab" role="tablist">
									<li role="presentation" class="active"><a href="#tab-desc" aria-controls="tab-desc" role="tab" data-toggle="tab">Thông tin thêm</a></li>
									<li role="presentation"><a href="#page-comments" aria-controls="page-comments" role="tab" data-toggle="tab">Bình luận</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="tab-desc">
										<div class="product-tab-desc">
											<p>Chi Tiết Sản Phẩm</p>
											<ul id="product-desc-t">
												<li>Số lượng: <?= $soluong ?></li>
												<li>Xuất sứ: <?= $xuatsu ?></li>
												<li>Mô tả: <br><?= $mota ?></li>
											</ul>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="page-comments">
										<div class="product-tab-desc">
											<div class="product-page-comments">

												<div class="review-form-wrapper">
													<h3>Bình luận</h3>
													<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
													<script>
														$(document).ready(function() {
															$("#binhluan").load("view/binhluan/binhluanform.php", {
																idpro: <?= $id ?>
															});

														});
													</script>
													<div class="row  " id="binhluan">

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
						</div>
					</div>
					<div class="related-curosel">
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<aside class="widget widget-categories">
					<h3 class="sidebar-title">Danh Mục</h3>
					<ul class="sidebar-menu">
						<?php
						foreach ($dsdm as $dm) {
							extract($dm);
							$linkdm = "index.php?act=sanpham&iddm=" . $id;
							echo '<li>
									<a href="' . $linkdm . '">' . $name . '</a>
								</li>';
						}

						?>
					</ul>
				</aside>
				<!-- widget-categories end -->
				<!-- widget start -->
				<aside class="widget widget-categories">
					<h3 class="sidebar-title">Top yêu thích</h3>
					<div class="recent-product">
						<?php
						foreach ($dstop5 as $sp) :
							extract($sp);
							$linksp = "index.php?act=sanphamct&idsp=" . $id;
							$img = $img_path . $img;
						?>
							<div class="single-product">
								<div class="product-img">
									<a href="<?= $linksp ?>">
										<img src="<?= $img ?>" alt="" />
									</a>
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
						endforeach;
						?>
					</div>
				</aside>

				<aside class="widget sale-off hidden-sm">
					<div class="sale-off-carosel">
						<div class="single-sale">
							<a href="#">
								<img src="/img/product/p6.jpg" alt="" />
								<h2>sale off</h2>
							</a>
						</div>
						<div class="single-sale">
							<a href="#">
								<img src="/img/product/p10.jpg" alt="" />
								<h2>sale off</h2>
							</a>
						</div>
						<div class="single-sale">
							<a href="#">
								<img src="/img/product/p11" alt="" />
								<h2>sale off</h2>
							</a>
						</div>
					</div>
				</aside>
			</div>
			<!-- left-sidebar end -->
		</div>
	</div>
</div>