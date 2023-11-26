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
<div class="category-area pad-60">
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
					<div class="product-curosel">
                        <?php
                            $i=0;
                            foreach ($spnew as $sp) {
                                extract($sp);
                                $linksp= "index.php?act=sanphamct&idsp=".$id;
                                $hinh= $img_path.$img;
                                if(($i==2)||($i==5)||($i==8)){
                                    $mr="";
                                }else{
                                    $mr="mr";
                                }
                                // echo '<div class="boxsp '.$mr.'">
                                //             <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>                      
                                //             <strong  class="gia"><p>$'.$price.'</p></strong>
                                //             <div class="tensphome"><strong> <a  href="'.$linksp.'">'.$name.'</a> </strong> </div>
                                //         </div>';

                                // echo '<div class="boxsp '.$mr.'">
                                //             <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>                      
                                //             <strong  class="gia"><p>$'.$price.'</p></strong>
                                //             <div class="tensphome"><strong> <a  href="'.$linksp.'">'.$name.'</a> </strong> </div>
                                //         </div>';

                                echo '<div class="col-md-12 ">
                                <div class="single-product ">
                                        <div class="product-img">
                                            <a href="'.$linksp.'">
                                                <img src="'.$hinh.'" alt="" width="100%" />  
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                    <a href="#" ><i class="fa fa-heart"></i></a>
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
                                    </div></div>';
                                        $i+=1;
                            }
                        ?>
				
					</div>
				</div>
			</div>
		</div>   