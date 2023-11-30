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
								<span>$<?= $price_sale ?></span>
								<span class="old">$<?= $price ?> </span>
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
								<div class="cart-plus">
									<form action="#">
										<div class="cart-plus-minus"><input type="text" value="1" /></div>
									</form>
								</div>
								<div class="button-top">
									<a href="#"><i class="fa fa-heart"></i></a>
								</div>
								<div class="button-cart">
									<button><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
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
												<li><?= $mota ?></li>
											</ul>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="page-comments">
										<div class="product-tab-desc">
											<div class="product-page-comments">

												<div class="review-form-wrapper">
													<h3>Bình luận</h3>
													<form action="#">
														<div class="your-rating">

														</div>
														<textarea id="product-message" cols="30" rows="10" placeholder="Your Rating"></textarea>
														<input type="submit" value="submit" />
													</form>
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
							<h2>Sản phẩm liên quan</h2>
							<div class="title-icon">
								<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
							</div>
						</div>
					</div>
				</div>
				<div style="display: flex;width:100%" class="row">
					
						<!-- single-product start -->
						
							<?php
								foreach($sp_cung_loai as $sp_cung_loai){
									extract($sp_cung_loai);
									$linksp = "index.php?act=sanphamct&idsp=".$id;
									echo '<div style="flex-wrap: wrap; width: 30%; justify-content: space-between" class="single-product">
											<div class="product-img">
												<a style="height: 250px" href="'.$linksp.'">
													<img src="'.$img.'" alt="" />
												</a>
												<span class="tag-line">new</span>
												<div class="product-action">
													<div class="button-top">
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart"></i></a>
													</div>
													<div class="button-cart">
														<button><i class="fa fa-shopping-cart"></i> add to cart</button>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="'.$linksp.'">'.$name.'</a></h3>
												<div class="price">
													<span>$'.$price_sale.'</span>
													<span class="old">$'.$price.'</span>
												</div>
											</div>
										</div>';
								}
							?>
							<!-- <div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img src="/login/wphix.com/template/pabna/pabna/img/product/2.jpg" alt="" />
										<img class="secondary-img" src="/login/wphix.com/template/pabna/pabna/img/product/1.jpg" alt="" />
									</a>
									<span class="tag-line">new</span>
									<div class="product-action">
										<div class="button-top">
											<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
											<a href="#"><i class="fa fa-heart"></i></a>
										</div>
										<div class="button-cart">
											<button><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
									<div class="price">
										<span>$70.00</span>
										<span class="old">$80.11</span>
									</div>
								</div>
							</div> -->
						

					
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
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp= "index.php?act=sanphamct&idsp=".$id;
                                $img= $img_path.$img;
								echo '<div class="single-product">
										<div class="product-img">
											<a href="'.$linksp.'">
												<img src="'.$img.'" alt="" />
											</a>
										</div>
										<div class="product-content">
											<h3><a href="'.$linksp.'">'.$name.'</a></h3>
											<div class="price">
												<span>$'.$price_sale.'</span>
												<span class="old">$'.$price.'</span>
											</div>
										</div>
									</div>';
                            }
                        ?>
						<!-- <div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img src="" alt="" />
								</a>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Lorem ipsum dolor</a></h3>
								<div class="price">
									<span>$80.00</span>
									<span class="old">$90.11</span>
								</div>
							</div>
						</div> -->

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