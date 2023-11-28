
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-list">
					<h1>DANH MỤC CỬA HÀNG</h1>
					<ul>
						<li><a href="index.php">Trang chủ</a> <span class="divider">|</span></li>
						<li><a href="#">Thú cưng</a> <span class="divider"></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shop-area">
	<div class="container">
		<div class="row">
			<!-- left-sidebar start -->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<!-- widget-categories start -->
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
				<aside class="widget product-tag">
					<h3 class="sidebar-title">Popular Tags</h3>
					<ul>
						<li><a href="#">Top</a></li>
						<li><a href="#">Fashion</a></li>
						<li><a href="#">Collection</a></li>

					</ul>
				</aside>
				<!-- widget-tags end -->
				<aside class="widget sale-off hidden-sm">
					<div class="sale-off-carosel">
						<div class="single-sale">
							<a href="#">
								<img src="img/product/6.jpg" alt="" />
								<h2>sale off</h2>
							</a>
						</div>
						<div class="single-sale">
							<a href="#">
								<img src="img/product/7.jpg" alt="" />
								<h2>sale off</h2>
							</a>
						</div>
						<div class="single-sale">
							<a href="#">
								<img src="img/product/4.jpg" alt="" />
								<h2>sale off</h2>
							</a>
						</div>
					</div>
				</aside>
			</div>
			<!-- left-sidebar end -->
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="shop-content">
					<!-- Nav tabs -->
					<ul class="shop-tab" role="tablist">
						<li><span class="sorting-name"> View as: </span></li>
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
					</ul>
					<div class="shop-breadcrumb">
						<!-- <ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul> -->
					</div>

					<div class="clear"><div class="product-curosel">
					<?php
                           $i=0;
                           foreach ($dssp as $sp) {
                               extract($sp);
                               $linksp= "index.php?act=sanphamct&idsp=".$id;
                               $hinh= $img_path.$img;
                               if(($i==2)||($i==5)||($i==8)||($i==11)){
                                   $mr="";
                               }else{
                                   $mr="mr";
                               }
                               echo '<div class="col-md-12 ' . $mr . '">
                                <div class="single-product ">
                                    
                                        <div class="product-img">
                                            <a href="' . $linksp . '">
                                                <img src="' . $hinh . '" alt="" width="100%" />  
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                                </div>
                                                <form action="index.php?act=addtocart" method="post">
                                                    <input type="hidden" name="id" value="' . $id . '">
                                                    <input type="hidden" name="name" value="' . $name . '">
                                                    <input type="hidden" name="img" value="' . $img . '">
                                                    <input type="hidden" name="price_sale" value="' . $price_sale . '">
                                                    <div class="button-cart">
                                                        <!--<button type="submit" name="addtocart"><i class="fa fa-shopping-cart"></i> add to cart</button>-->
                                                        <input type="submit" class="fa fa-shopping-cart" name="addtocart" value="Thêm vào giỏ hàng">
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="' . $linksp . '">' . $name . '</a></h3>
                                            <div class="price">
                                                <span>$' . $price_sale . '</span>
                                                <span class="old">$' . $price . '</span>
                                            </div>
                                        </div>
                                        
                                        </div>
                                        </div>';
                                       $i+=1;
                            }
                            
                        ?>
				
					</div></div>

					<!-- Tab panes -->
				</div>
			</div>
		</div>
	</div>
</div>